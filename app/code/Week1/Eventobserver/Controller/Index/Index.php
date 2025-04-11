<?php

namespace Week1\Eventobserver\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

	// public function execute()
	// {
	// 	$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Mageplaza'));
	// 	$this->_eventManager->dispatch('week1_eventobserver_display_text', ['mp_text' => $textDisplay]);
	// 	echo $textDisplay->getText();
	// 	exit;
	// }
	public function execute()
	{
		$textDisplay = 'Mageplaza';
		$this->_eventManager->dispatch('week1_eventobserver_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay; // vẫn in ra "Mageplaza"
		exit;
		
	}

}
