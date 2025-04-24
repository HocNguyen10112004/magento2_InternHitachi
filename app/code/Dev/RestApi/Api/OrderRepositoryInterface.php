<?php

namespace Dev\RestApi\Api;
interface OrderRepositoryInterface
{
    
    /**
     * Set descriptions for the products.
     *
     * @param mixed $orderData
     * @return array
     */
    public function createOrder($orderData);
}
