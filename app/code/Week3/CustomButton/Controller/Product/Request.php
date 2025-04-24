<?php
namespace Week3\CustomButton\Controller\Product;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;

class Request extends Action
{
    protected $resultJsonFactory;

    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory  
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory; 
    }

    public function execute()
    {
        // Gửi phản hồi JSON với thông điệp Hello World
        $result = $this->resultJsonFactory->create();
        return $result->setData(['message' => 'Hello World']);
    }
}
