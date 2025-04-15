<?php

namespace Week2\LogOrder\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class OrderObserver implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
      
        $this->logger->info('Observer called!');

        // Lấy đối tượng đơn hàng
        $order = $observer->getEvent()->getOrder();

        // Ghi log thông tin đơn hàng
        $this->logger->info('New order created. Order ID: ' . $order->getId());
        $this->logger->info('Customer Name: ' . $order->getCustomerName());
        $this->logger->info('Order Total: ' . $order->getGrandTotal());
    }
}
