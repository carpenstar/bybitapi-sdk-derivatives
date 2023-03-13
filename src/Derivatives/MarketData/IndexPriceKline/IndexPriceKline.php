<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Dto\IndexPriceKlineDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Options\IndexPriceKlineOptions;

/**
 * Get index price kline data
 * https://bybit-exchange.github.io/docs/derivatives/public/index-kline
 */
class IndexPriceKline extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/index-price-kline";

    protected function getResponseDTOClass(): string
    {
        return IndexPriceKlineDto::class;
    }

    public function getRequestOptionsDTOClass(): string
    {
        return IndexPriceKlineOptions::class;
    }
}