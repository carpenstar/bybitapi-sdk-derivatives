<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;

/**
 * Get kline data
 * https://bybit-exchange.github.io/docs/derivatives/public/kline
 */
class Kline extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/kline";

    protected function getResponseEntityClassName(): string
    {
        return KQueryBag::class;
    }

    public function getQueryBagClassName(): string
    {
        return KResponse::class;
    }
}