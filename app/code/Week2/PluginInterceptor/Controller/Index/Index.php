<?php

namespace Week2\PluginInterceptor\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements ActionInterface
{
    protected $title;

	public function execute()
	{
		echo $this->setTitle('Welcome');
		echo $this->getTitle();
        exit;
	}

	public function setTitle($title)
	{
		return $this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}
}
