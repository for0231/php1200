<?php
class Model_DbTable_Keywords extends Zend_Db_Table
{
    protected $_name = 'tb_keywords';
    protected $_id = 'id';
    private $_cache;
    //
    public function init ()
    {
        $this->_cache = Zend_Registry::get('cache');
    }
    //
    public function findByLike ($keyword, $num, $isCache = false)
    {
        $where = $this->getAdapter()->quoteInto('keyword like ?', $keyword . '%');
        $order = 'searchtime desc';
        if ($isCache) {
            if (! $result = $this->_cache->load(strtoupper($this->_name . '_findByLike_' . md5($keyword) . '_' . $num))) {
                $result = $this->fetchAll($where, $order, $num, 0);
                $this->_cache->save($result, strtoupper($this->_name . '_findByLike_' . md5($keyword) . '_' . $num));
            }
        } else {
            $result = $this->fetchAll($where, $order, $num, 0);
        }
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }
    //
    public function findByHot ($num, $isCache = false)
    {
        $order = 'searchtime desc';
        if ($isCache) {
            if (! $result = $this->_cache->load(strtoupper($this->_name . '_findByHot_' . $num))) {
                $result = $this->fetchAll(null, $order, $num, 0);
                $this->_cache->save($result, strtoupper($this->_name . '_findByHot_' . $num));
            }
        } else {
            $result = $this->fetchAll(null, $order, $num, 0);
        }
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }


}
