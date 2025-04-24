<?php

namespace Dev\RestApi\Model;

use Magento\Quote\Api\ChangeQuoteControlInterface;
use Magento\Quote\Api\Data\CartInterface;

class BypassQuoteAccessControl implements ChangeQuoteControlInterface
{
    public function isAllowed(CartInterface $quote): bool
    {
        return true;
    }
}

