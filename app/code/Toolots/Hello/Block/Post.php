<?php
/**
 * Created by PhpStorm.
 * User: zhou
 * Date: 2017/10/20
 * Time: 10:08
 */

namespace Toolots\Hello\Block;


class Post extends \Magento\Framework\View\Element\Template
{
    protected $_postFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Toolots\Hello\Model\PostFactory $postFactory
    ){
        $this->_postFactory = $postFactory;
        parent::_construct($context);
    }

    public function _prepareLayout()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        foreach($collection as $item){
            var_dump($item->getData());
        }
        exit;
    }
}