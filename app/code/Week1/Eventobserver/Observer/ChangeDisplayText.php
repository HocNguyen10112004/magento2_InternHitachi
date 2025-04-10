<?php

namespace Week1\Eventobserver\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
class ChangeDisplayText implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$displayText = $observer->getData('mp_text');
		echo $displayText->getText() . " - Event </br>";
		$displayText->setText('Execute event successfully.');

		return $this;
	}
}
