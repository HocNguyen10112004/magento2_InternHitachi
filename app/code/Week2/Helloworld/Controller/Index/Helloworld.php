<?php
namespace Week2\Helloworld\Controller\Index;

use Week1\Helloworld\Controller\Index\Helloworld as BaseHelloworld;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Helloworld extends BaseHelloworld
{
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
    ) {
        parent::__construct($context, $pageFactory);
    }

    public function execute()
    {
        echo "Xin chào Magento (đã override)";
        exit;
    }
}
