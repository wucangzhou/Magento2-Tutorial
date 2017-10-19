<?php
/**
 * Created by PhpStorm.
 * User: zhou
 * Date: 2017/10/19
 * Time: 14:37
 */
namespace Toolots\Hello\Controller\Hello;
class World extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context
    )
    {
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        echo "Hello World";
        exit;
    }
}