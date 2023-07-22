<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequestOptions;

/**
 * Get kline data
 * https://bybit-exchange.github.io/docs/derivatives/public/kline
 */
class Kline extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/kline";
    }

    protected function getOptionsClassname(): string
    {
        return KlineResponse::class;
    }

    public function getResponseClassname(): string
    {
        return KlineRequestOptions::class;
    }
}