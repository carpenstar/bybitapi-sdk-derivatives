<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookAbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequestOptions;

class OrderBook extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/order-book/L2";
    }

    public function getRequestClassname(): string
    {
        return OrderBookRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return OrderBookAbstractResponse::class;
    }
}