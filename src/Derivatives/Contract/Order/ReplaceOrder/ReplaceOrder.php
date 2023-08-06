<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IPostEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Response\ReplaceOrderResponse;

class ReplaceOrder extends PrivateEndpoint implements IPostEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/replace";
    }

    protected function getResponseClassname(): string
    {
        return ReplaceOrderResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return ReplaceOrderRequest::class;
    }
}