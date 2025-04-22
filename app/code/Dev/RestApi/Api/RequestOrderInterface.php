<?php

namespace Dev\RestApi\Api;

// interface RequestOrderInterface
// {
//     const DATA_EMAIL = 'email';
//     const DATA_SHIPPING_ADDRESS = 'shipping_address';
//     const DATA_ITEMS = 'items';
//     const DATA_CURRENCY = 'currency_id';
//     public function getEmail();
//     public function getShippingAddress();
//     public function getItems();
//     public function getCurrencyID();
// }
interface RequestOrderInterface
{
    /** @const string */
    const CURRENCY_ID        = 'currency_id';
    const EMAIL              = 'email';
    const SHIPPING_ADDRESS   = 'shipping_address';
    const ITEMS              = 'items';

    /** @return string */
    public function getCurrencyId();

    /** @return string */
    public function getEmail();

    public function getShippingAddress();

    public function getItems();
    public function setCurrencyId(string $currencyId);
}
