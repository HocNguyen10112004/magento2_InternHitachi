<?php

namespace Dev\RestApi\Plugin;

use Magento\Quote\Api\Data\CartInterface;
use Magento\Quote\Api\CartRepositoryInterface;

class BypassAccessChangePlugin
{
    public function aroundBeforeSave(
        \Magento\Quote\Model\QuoteRepository\Plugin\AccessChangeQuoteControl $subject,
        \Closure $proceed,
        CartRepositoryInterface $quoteRepository,
        CartInterface $quote
    ) {
        if (php_sapi_name() !== 'cli' && isset($_SERVER['REQUEST_URI']) &&
            strpos($_SERVER['REQUEST_URI'], '/V1/dev-restapi/order') !== false
        ) {
            return; 
        }

        return $proceed($quoteRepository, $quote);
    }
}
