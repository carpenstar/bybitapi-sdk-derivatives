<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Dto\OrderBookDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Options\OrderBookOptions;

class OrderBook extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/order-book/L2";

    public function getQueryBagClassName(): string
    {
        return OrderBookOptions::class;
    }

    protected function getResponseEntityClassName(): string
    {
        return OrderBookDto::class;
    }
}