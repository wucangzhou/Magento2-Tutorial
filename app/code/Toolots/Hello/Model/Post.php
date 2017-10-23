<?php
/**
 * Created by PhpStorm.
 * User: zhou
 * Date: 2017/10/20
 * Time: 9:55
 */
namespace Toolots\Hello\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'toolots_helloworld_post';

    protected $_cacheTag = 'toolots_helloworld_post';

    protected $_eventPrefix = 'toolots_helloworld_post';

    protected function _construct()
    {
        $this->_init('Toolots\Hello\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }

}