<?php
/**
 * 论坛回复主题表模型
 *
 */
class Model_DbTable_Reply extends Zend_Db_Table
{
    protected $_name = 'tb_reply';
    protected $_primary = 'id';
    private $_cache;
    /**
     * 模型初始信息
     *
     */
    public function init ()
    {
        $this->_cache = Zend_Registry::get('cache');
    }
    public function findByPage ($titleid, $page = 1, $pageSize = 10, $pageRange = 5)
    {
        //
        $innerSelect1 = $this->getAdapter()->select();
        $innerSelect1->from('tb_title', 'count(*)')->join('tb_user', 'tb_title.user_id=tb_user.id', null)->where('tb_user.id=uid');
        //
        $innerSelect2 = $this->getAdapter()->select();
        $innerSelect2->from($this->_name, 'count(*)')->join('tb_user', $this->_name . '.user_id=tb_user.id', null)->where('tb_user.id=uid');
        //             
        $where = $this->getAdapter()->quoteInto($this->_name . '.title_id=?', $titleid);
        $select = $this->getAdapter()->select();
        $select->from($this->_name, array('id as rid' , 'title' , 'content' , 'user_id as uid' , 'addtime'))->join('tb_user', $this->_name . '.user_id=tb_user.id', array('netname' , 'face' , 'regtime'  , '(' . $innerSelect1 . ') as totaltitle' , '(' . $innerSelect2 . ') as totalreply'))->where($where);
        //
        $adapter = new Zend_Paginator_Adapter_DbSelect($select);
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage($pageSize)->setCurrentPageNumber($page)->setPageRange($pageRange);
        //$paginator->setCache($this->_cache);
        return $paginator;
    }
    public function findById ($id)
    {
        $where = $this->getAdapter()->quoteInto('id = ?', $id);
        $result = $this->fetchRow($where);
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }
    public function findByTitleid ($id)
    {
        $where = $this->getAdapter()->quoteInto('title_id = ?', $id);
        $order = 'addtime';
        $select = $this->getAdapter()->select();
        $select->from($this->_name)->join('tb_user', $this->_name . '.user_id = tb_user.id', array('id as uid' , 'netname'))->where($where)->order($order);
        $result = $this->getAdapter()->fetchAll($select);
        return $result;
    }
}