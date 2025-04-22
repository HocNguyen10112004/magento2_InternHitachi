<?php
namespace Dev\RestApi\Model\Api;

use Dev\RestApi\Api\RequestOrderInterface;
use Magento\Framework\DataObject;

class RequestOrder extends DataObject implements RequestOrderInterface
{
    public function getCurrencyId()
    {
        return $this->getData(self::CURRENCY_ID);
    }

    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    public function getShippingAddress()
    {
        // sẽ trả về 1 instance of ShippingAddress
        return $this->getData(self::SHIPPING_ADDRESS);
    }

    public function getItems()
    {
        return $this->getData(self::ITEMS);
    }
    public function setCurrencyId(string $currencyId)
    {
        $this->setData(self::CURRENCY_ID, $currencyId);
    }
}
