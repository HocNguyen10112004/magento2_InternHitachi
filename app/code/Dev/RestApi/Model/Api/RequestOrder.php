<?php

namespace Dev\RestApi\Model\Api;

use Dev\RestApi\Api\RequestOrderInterface;
use Magento\Framework\DataObject;

class RequestOrder extends DataObject implements RequestOrderInterface
{
    public function getCartItems(): array
    {
        return $this->getData(self::CART_ITEMS) ?? [];
    }

    public function getAddressInformation(): array
    {
        return $this->getData(self::ADDRESS_INFORMATION) ?? [];
    }

    public function getPayment(): array
    {
        return $this->getData(self::PAYMENT) ?? [];
    }

    public function setCartItems(array $cartItems): mixed
    {
        return $this->setData(self::CART_ITEMS, $cartItems);
    }

    public function setAddressInformation(array $addressInfo): mixed
    {
        return $this->setData(self::ADDRESS_INFORMATION, $addressInfo);
    }

    public function setPayment(array $payment): mixed
    {
        return $this->setData(self::PAYMENT, $payment);
    }
}
