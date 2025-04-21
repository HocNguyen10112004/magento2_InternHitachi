<?php

namespace Dev\RestApi\Api;

interface RequestOrderInterface
{
    public const CART_ITEMS = 'cart_items';
    public const ADDRESS_INFORMATION = 'address_information';
    public const PAYMENT = 'payment';

    public function getCartItems(): array;
    public function getAddressInformation(): array;
    public function getPayment(): array;

    public function setCartItems(array $cartItems): mixed;
    public function setAddressInformation(array $addressInfo): mixed;
    public function setPayment(array $payment): mixed;
}
