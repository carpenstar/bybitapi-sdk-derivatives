<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Dto\MarkPriceKlineDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Options\MarkPriceKlineOptions;

class MarkPriceKline extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/mark-price-kline";

    public function getQueryBagClassName(): string
    {
        return MarkPriceKlineOptions::class;
    }

    protected function getResponseEntityClassName(): string
    {
        return MarkPriceKlineDto::class;
    }
}