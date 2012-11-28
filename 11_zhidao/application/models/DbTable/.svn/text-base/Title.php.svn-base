<?php
class Model_DbTable_Title extends Zend_Db_Table
{
    protected $_name = 'tb_title';
    protected $_primary = 'id';
    /**
     * Enter description here...
     *
     * @param string $keywordsStr
     * @param int $bbstype_id
     * @param int $orderFlag
     * @param int $page
     * @param int $pageSize
     * @param int $pageRange
     * @return null|array
     */
public function findByLike ($keywordsStr, $bbstype_id = 0, $orderFlag = null, $page = 1, $pageSize = 10, $pageRange = 5)
{
    $arrayKeyWords = explode(' ', $keywordsStr); //将多个关键字用空格分割保存到数组中
    if ($orderFlag == null || $orderFlag == 0) { //指定排序方式
        $order = 'addtime desc'; //时间降序
    } else {
        $order = 'browse desc'; //时间升序
    }
    $select = $this->getAdapter()->select(); //生成Zend_Select对象
    $select->from($this->_name); //为Zend_Select对象指定表名
    foreach ($arrayKeyWords as $keywords) { //遍历所有被空格分割的关键字
        if (trim($keywords) != '') { //如果关键字不为空串
            $select->orWhere($this->getAdapter()->quoteInto('title like ?', '%' . $keywords . '%')); //对主题进行匹配查询
            if ($bbstype_id != 0) {
                $select->where('bbstype_id = ' . $bbstype_id); //指定查询类别
            }
            $select->orWhere($this->getAdapter()->quoteInto('unhtmlcontent like ?', '%' . $keywords . '%')); //对内容进行匹配查询
            if ($bbstype_id != 0) {
                $select->where('bbstype_id = ' . $bbstype_id); //指定查询类别
            }
        }
    }
    $select->order($order); //指定查找结果排序方式
    $adapter = new Zend_Paginator_Adapter_DbSelect($select); //指定分页适配器
    $paginator = new Zend_Paginator($adapter); //生成Zend_Paginator分页对象
    $paginator->setItemCountPerPage($pageSize)->setCurrentPageNumber($page)->setPageRange($pageRange); //指定分页参数
    return $paginator; //将Zend_Paginator对象作为结果返回
}
    public function findByPage ($typeid, $listType = 1, $page = 1, $pageSize = 10, $pageRange = 5)
    {
        //回复总数
        $innerSelect1 = $this->getAdapter()->select();
        $innerSelect1->from('tb_reply', 'count(*)')->join('tb_title', 'tb_reply.title_id=tb_title.id', null)->where('tb_title.id=tid');
        //最后回复时间
        $innerSelect2 = $this->getAdapter()->select();
        $innerSelect2->from('tb_reply', 'addtime')->join('tb_title', 'tb_reply.title_id=tb_title.id', null)->where('tb_title.id=tid')->limit(1, 0);
        //最后回复用户ID
        $innerSelect3 = $this->getAdapter()->select();
        $innerSelect3->from('tb_reply', array('user_id'))->join('tb_title', 'tb_reply.title_id=tb_title.id', null)->where('tb_title.id=tid')->limit(1, 0);
        //最后回复用户
        $innerSelect4 = $this->getAdapter()->select();
        $innerSelect4->from('tb_user', array('netname'))->where('tb_user.id=(' . $innerSelect3 . ')');
        //外层查询
        $select = $this->getAdapter()->select();
        $select->from($this->_name, array($this->_name . '.id as tid' , $this->_name . '.title' , $this->_name . '.addtime' , $this->_name . '.browse' , $this->_name . '.istop' , $this->_name . '.isjh' , $this->_name . '.filename' , '(' . $innerSelect1 . ') as replytimes' , '(' . $innerSelect2 . ') as lastreplytime' , '(' . $innerSelect4 . ') as lastreplyuserNetname'))->join('tb_user', $this->_name . '.user_id=tb_user.id', 'tb_user.netname as writerNetname')->where($this->getAdapter()->quoteInto('bbstype_id = ?', $typeid));
        if ($listType == 5) {
            $select->where('isjh=1');
        } elseif ($listType == 6) {
            $config = Zend_Registry::get('config');
            $select->where('browse>' . $config['bbs']['hotTitleBrowseStandard']);
        } elseif ($listType == 7) {
            $select->where('istop=true');
        }
        $select->order('istop desc');
        if ($listType == 2) {
            $select->order('browse desc');
        } elseif ($listType == 3) {
            $select->order('replytimes desc');
        } elseif ($listType == 4) {
            $select->order('lastreplytime desc');
        } else {
            $select->order('addtime desc');
        }
        $adapter = new Zend_Paginator_Adapter_DbSelect($select);
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage($pageSize)->setCurrentPageNumber($page)->setPageRange($pageRange);
        //$paginator->setCache($this->_cache);
        return $paginator;
    }
    public function findById ($id, $isCache = false)
    {
        //
        $innerSelect1 = $this->getAdapter()->select();
        $innerSelect1->from($this->_name, 'count(*)')->join('tb_user', $this->_name . '.user_id=tb_user.id', null)->where('tb_user.id=uid');
        //
        $innerSelect2 = $this->getAdapter()->select();
        $innerSelect2->from('tb_reply', 'count(*)')->join('tb_user', 'tb_reply.user_id=tb_user.id', null)->where('tb_user.id=uid');
        //             
        $where = $this->getAdapter()->quoteInto($this->_name . '.id=?', $id);
        $select = $this->getAdapter()->select();
        $select->from($this->_name, array('id as tid' , 'title' , 'content' , 'bbstype_id' , 'filename' , 'user_id as uid' , 'addtime'))->join('tb_user', $this->_name . '.user_id=tb_user.id', array('netname' , 'face' , 'regtime' , '(' . $innerSelect1 . ') as totaltitle' , '(' . $innerSelect2 . ') as totalreply'))->join('tb_bbstype', $this->_name . '.bbstype_id=tb_bbstype.id', array('typename'))->where($where);
        if ($isCache == true) {
            if (! $result = $this->_cache->load(strtoupper($this->_name . '_findById_' . $id))) {
                $result = $this->getAdapter()->fetchRow($select);
                $this->_cache->save($result, strtoupper($this->_name . '_findById_' . $id));
            }
        } else {
            $result = $this->getAdapter()->fetchRow($select);
        }
        return $result;
    }
    public function findLastByUserid ($id)
    {
        $where = $this->getAdapter()->quoteInto('user_id = ?', $id);
        $order = 'addtime desc';
        $result = $this->fetchRow($where, $order);
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }
    public function findTopTitle ($num, $flag = 0)
    {
        $select = $this->getAdapter()->select();
        $select->from($this->_name, array('id' , 'title' , 'user_id' , 'browse' , 'addtime'))->join('tb_user', $this->_name . '.user_id=tb_user.id', array('netname' , 'face'));
        if ($flag == 0) {
            $order = 'browse desc';
        } elseif ($flag == 1) {
            $order = 'addtime desc';
        } elseif ($flag == 2) {
            $select->where('isjh', true);
            $order = 'browse desc';
        }
        $select->order($order);
        $select->limit($num, 0);
        $result = $this->getAdapter()->fetchAll($select);
        return $result;
    }
}
