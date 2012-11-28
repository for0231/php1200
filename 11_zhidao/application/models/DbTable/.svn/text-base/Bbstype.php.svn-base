<?php
/**
 * 论坛类别表模型
 *
 */
class Model_DbTable_Bbstype extends Zend_Db_Table
{
    protected $_name = 'tb_bbstype';
    protected $_primary = 'id';
private $_cache;
/**
 * 模型初始化
 *
 */
public function init ()
{
    $this->_cache = Zend_Registry::get('cache');  //获取缓存对象
}
    /**
     * 查询所有论坛类别
     *
     * @param boolean $isCache
     * @return null|array
     */
public function findAll ($isCache = false)
{
    $innerSelect1 = $this->getAdapter()->select(); //所有主题
    $innerSelect1->from('tb_title', 'count(*)')->join($this->_name, 'tb_title.bbstype_id=' . $this->_name . '.id', null)->where($this->_name . '.id = tid');
    $innerSelect2 = $this->getAdapter()->select(); //今日主题
    $innerSelect2->from('tb_title', 'count(*)')->join($this->_name, 'tb_title.bbstype_id=' . $this->_name . '.id', null)->where('date(tb_title.addtime)=date(now())')->where($this->_name . '.id = tid');
    $innerSelect3 = $this->getAdapter()->select(); //最后主题ID
    $innerSelect3->from('tb_title', 'tb_title.id')->join($this->_name, 'tb_title.bbstype_id=' . $this->_name . '.id', null)->where($this->_name . '.id = tid')->order('tb_title.addtime desc')->limit(1, 0);
    $innerSelect4 = $this->getAdapter()->select(); //最后主题
    $innerSelect4->from('tb_title', 'tb_title.title')->join($this->_name, 'tb_title.bbstype_id=' . $this->_name . '.id', null)->where($this->_name . '.id = tid')->order('tb_title.addtime desc')->limit(1, 0);
    $innerSelect5 = $this->getAdapter()->select(); //最后主题时间
    $innerSelect5->from('tb_title', 'tb_title.addtime')->join($this->_name, 'tb_title.bbstype_id=' . $this->_name . '.id', null)->where($this->_name . '.id = tid')->order('tb_title.addtime desc')->limit(1, 0);
    $innerSelect6 = $this->getAdapter()->select(); //总回复
    $innerSelect6->from('tb_reply', 'count(*)')->join($this->_name, 'tb_reply.bbstype_id=' . $this->_name . '.id', null)->where($this->_name . '.id = tid');
    $innserSelect7 = $this->getAdapter()->select(); //最后回复用户ID
    $innserSelect7->from('tb_title', 'tb_title.user_id')->join($this->_name, 'tb_title.bbstype_id=' . $this->_name . '.id', null)->where($this->_name . '.id=tid')->order('tb_title.addtime desc')->limit(1, 0);
    $innserSelect8 = $this->getAdapter()->select(); //最后回复用户昵称
    $innserSelect8->from('tb_user', 'netname')->where('id=(' . $innserSelect7 . ')');
    $select = $this->getAdapter()->select(); //外层查询          
    $select->from($this->_name, array($this->_name . '.id as tid' , $this->_name . '.typename' , $this->_name . '.description' , $this->_name . '.addtime' , '(' . $innerSelect1 . ') as totaltitle' , '(' . $innerSelect2 . ') as totaltodaytitle' , '(' . $innerSelect3 . ') as lasttitleid' , '(' . $innerSelect4 . ') as lasttitletitle' , '(' . $innerSelect5 . ') as lasttitletime' , '(' . $innerSelect6 . ') as totalreply' , '(' . $innserSelect8 . ') as lasttitlenetname'))->order('' . $this->_name . '.addtime asc');
if ($isCache) { //如果缓存查询结果
    if (! $result = $this->_cache->load(strtoupper($this->_name . '_findAll'))) { //判断缓存文件是否存在或缓存是否过期
        $result = $this->getAdapter()->fetchAll($select); //如果缓存文件不存在或缓存过期，则重写查找
        $this->_cache->save($result, strtoupper($this->_name . '_findAll')); //写入并生成新缓存
    }
} else {
    $result = $this->getAdapter()->fetchAll($select); //不缓存则直接查找
}
    return $result; //返回结果
}
    /**
     * 根据ID查找类别
     *
     * @param int $id
     * @return null|array
     */
    public function findById ($id, $isCache = false)
    {
        //查询总主题数
        $innerSelect1 = $this->getAdapter()->select();
        $innerSelect1->from('tb_title', 'count(*)')->join($this->_name, 'tb_title.bbstype_id=' . $this->_name . '.id', null)->where($this->_name . '.id = tid');
        //查询总回复数
        $innerSelect2 = $this->getAdapter()->select();
        $innerSelect2->from('tb_reply', 'count(*)')->join($this->_name, 'tb_reply.bbstype_id=' . $this->_name . '.id', null)->where($this->_name . '.id = tid');
        //外层查询
        $where = $this->getAdapter()->quoteInto($this->_name . '.id = ?', $id);
        $select = $this->getAdapter()->select();
        $select->from($this->_name, array('id as tid' , 'typename' , 'description' , 'addtime' , '(' . $innerSelect1 . ') as totaltitle' , '(' . $innerSelect2 . ') as totalreply'))->where($where);
        if ($isCache) {
            if (! $result = $this->_cache->load(strtoupper($this->_name . '_findById_' . $id))) {
                $result = $this->getAdapter()->fetchRow($select);
                $this->_cache->save($result, strtoupper($this->_name . '_findById_' . $id));
            }
        } else {
            $result = $this->getAdapter()->fetchRow($select);
        }
        return $result;
    }
}