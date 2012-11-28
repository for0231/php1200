<?php
/**
 * 用户表模型
 *
 */
class Model_DbTable_User extends Zend_Db_Table
{
    protected $_name = 'tb_user';
    protected $_primary = 'id';
    /**
     * 按昵称查找用户
     *
     * @param string $netname
     * @return null|string
     */
    public function findByNetname ($netname)
    {
        $where = $this->getAdapter()->quoteInto('netname = ?', $netname);
        $result = $this->fetchRow($where);
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }
    /**
     * 判断用户名是否正确
     *
     * @param string $username
     * @param string $password
     * @return boolean
     */
    public function isValid ($username, $password)
    {
        $authAdapter = new Zend_Auth_Adapter_DbTable($this->getAdapter());
        $authAdapter->setTableName($this->_name)->setIdentityColumn('netname')->setCredentialColumn('password')->setIdentity(trim($username))->setCredential(md5(trim($password)));
        //获取Zend_Auth对象并验证
        $auth = Zend_Registry::get('auth');
        return $auth->authenticate($authAdapter)->isValid();
    }
    public function findByFriendid ($friendid, $num, $isCache = false)
    {
        $where = $this->getAdapter()->quoteInto('id in(?)', explode(',', $friendid));
        if ($isCache == true) {
            if (! $result = $this->_cache->load(strtoupper($this->_name . '_findByFriendid_' . str_replace(',', '_', $friendid) . '_' . $num))) {
                $result = $this->fetchAll($where, null, $num, 0);
                $this->_cache->save($result, strtoupper($this->_name . '_findByFriendid_' . str_replace(',', '_', $friendid) . '_' . $num));
            }
        } else {
            $result = $this->fetchAll($where, null, $num, 0);
        }
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }
    public function findByBlogUserid ($id)
    {
        //
        $innerSelect1 = $this->getAdapter()->select();
        $innerSelect1->from('tb_blog_article', 'count(*)')->where($this->_name . '.id = tb_blog_article.user_id');
        //
        $innerSelect2 = $this->getAdapter()->select();
        $innerSelect2->from('tb_blog_photo', 'count(*)')->where($this->_name . '.id = tb_blog_photo.user_id');
        //
        $select = $this->getAdapter()->select();
        //
        $where = $this->getAdapter()->quoteInto('id = ?', $id);
        $select->from($this->_name, array('id as uid' , '*' , '(' . $innerSelect1 . ') as totalArticle' , '(' . $innerSelect2 . ') as totalPhoto'))->where($where);
        return $this->getAdapter()->fetchRow($select);
    }
    /**
     * 用户信息分页显示
     *
     * @param int $orderIndex
     * @param int $page
     * @param int $itemCountPerPage
     * @param int $pageRange
     * @return Zend_paginator
     */
    public function findByPage ($orderIndex, $page = 1, $itemCountPerPage = 10, $pageRange = 5)
    {
        //生成select对象
        $select = $this->getAdapter()->select();
        $select->from($this->_name);
        //排序方式
        if ($orderIndex == 0) {
            $order = 'regtime desc';
        } elseif ($orderIndex == 1) {
            $order = 'regtime';
        }
        $select->order('usertype desc');
        $select->order($order);
        //实例Zend_Paginator对象
        $paginatorAdapter = new Zend_Paginator_Adapter_DbSelect($select);
        $paginator = new Zend_Paginator($paginatorAdapter);
        $paginator->setPageRange($pageRange)->setItemCountPerPage($itemCountPerPage)->setCurrentPageNumber($page);
        return $paginator;
    }
    /**
     * 按昵称模糊查找
     *
     * @param string $netname
     * @return null|array
     */
    public function findByLike ($netname)
    {
        $where = $this->getAdapter()->quoteInto('netname like ?', '%' . $netname . '%');
        $result = $this->fetchAll($where);
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }
}