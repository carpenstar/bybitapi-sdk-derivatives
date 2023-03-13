<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Dto\KlineDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Options\KlineOptions;

/**
 * Get kline data
 * https://bybit-exchange.github.io/docs/derivatives/public/kline
 */
class Kline extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/kline";

    protected function getResponseDTOClass(): string
    {
        return KlineDto::class;
    }

    public function getRequestOptionsDTOClass(): string
    {
        return KlineOptions::class;
    }
}