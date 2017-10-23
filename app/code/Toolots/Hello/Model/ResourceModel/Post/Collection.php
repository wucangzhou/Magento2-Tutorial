<?php
/**
 * Created by PhpStorm.
 * User: zhou
 * Date: 2017/10/20
 * Time: 10:04
 */
namespace Toolots\Hello\Model\ResourceModel\Post;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'toolots_helloworld_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * 定义资源模型
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Toolots\Hello\Model\Post', 'Toolots\Hello\Model\ResourceModel\Post');
    }

    /**
     * sql获取记录总数
     * 附带GROUP BY添加.
     *
     * @return \Magento\Framework\DB\Select
     */
    public function getSelectCountSql()
    {
        $countSelect = parent::getSelectCountSql();
        $countSelect->reset(\Zend_Db_Select::GROUP);
        return $countSelect;
    }
    /**
     * @param string $valueField
     * @param string $labelField
     * @param array $additional
     * @return array
     */
    protected function _toOptionArray($valueField = 'post_id', $labelField = 'name', $additional = [])
    {
        return parent::_toOptionArray($valueField, $labelField, $additional);
    }
}