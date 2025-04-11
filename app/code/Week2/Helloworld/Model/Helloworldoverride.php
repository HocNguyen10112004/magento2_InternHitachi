<?php

namespace Week2\Helloworld\Model;
use Week2\Helloworld\Controller\Index\Helloworld as BaseHelloworld;
class Helloworld extends BaseHelloworld
{
    public function execute()
    {
        echo "Xin chào Magento (đã override)";
        exit;
    }
}



