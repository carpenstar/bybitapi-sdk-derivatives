<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;

/**
 * Get index price kline data
 * https://bybit-exchange.github.io/docs/derivatives/public/index-kline
 */
class IndexPriceKline extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/index-price-kline";

    protected function getResponseEntityClassName(): string
    {
        return IPKQueryBaq::class;
    }

    public function getQueryBagClassName(): string
    {
        return IPKResponse::class;
    }
}