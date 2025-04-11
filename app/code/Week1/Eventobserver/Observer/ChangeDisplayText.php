<?php

namespace Week1\Eventobserver\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
class ChangeDisplayText implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
	{
		// $displayText = $observer->getData('mp_text');
		// echo $displayText->getText() . " - Event </br>";
		// $displayText->setText('Execute event successfully.');

		// return $this;
		$displayText = $observer->getData('mp_text');

        echo $displayText . " - In Observer<br>"; // In ra giá trị nhận được

        $displayText = "Modified by Observer"; // Chỉ thay đổi bản sao, không ảnh hưởng gì đến biến gốc

        return $this;
	}
}
