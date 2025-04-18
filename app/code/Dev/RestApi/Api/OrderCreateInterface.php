<?php
namespace Dev\RestApi\Api;

interface OrderCreateInterface
{
    /**
     * Tạo đơn hàng
     * @param string $customerEmail
     * @param array $products
     * @return string
     */
    public function createOrder($customerEmail, $products);
}
