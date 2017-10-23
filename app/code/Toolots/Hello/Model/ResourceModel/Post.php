<?php
/**
 * Created by PhpStorm.
 * User: zhou
 * Date: 2017/10/20
 * Time: 9:59
 */
namespace Toolots\Hello\Model\ResourceModel;
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * 数据模型
     *
     * @var \Magento\Framework\Stdlib\DateTime\DateTime
     */
    protected $_date;

    /**
     * 构造函数
     *
     * @param \Magento\Framework\Stdlib\DateTime\DateTime $date
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     */
    public function __construct(
        \Magento\Framework\Stdlib\DateTime\DateTime $date,
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        $this->_date = $date;
        parent::__construct($context);
    }


    /**
     * 初始化资源模型
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('toolots_helloworld_post', 'post_id');
    }

    /**
     * 通过传递id从DB搜索帖子标题。
     *
     * @param string $id
     * @return string|bool
     */
    public function getPostNameById($id)
    {
        $adapter = $this->getConnection();
        $select = $adapter->select()
            ->from($this->getMainTable(), 'name')
            ->where('post_id = :post_id');
        $binds = ['post_id' => (int)$id];
        return $adapter->fetchOne($select, $binds);
    }
    /**
     * 保存之前回调
     *
     * @param \Magento\Framework\Model\AbstractModel|\Toolots\Hello\Model\Post $object
     * @return $this
     */
    protected function _beforeSave(\Magento\Framework\Model\AbstractModel $object)
    {
        $object->setUpdatedAt($this->_date->date());
        if ($object->isObjectNew()) {
            $object->setCreatedAt($this->_date->date());
        }
        return parent::_beforeSave($object);
    }
}