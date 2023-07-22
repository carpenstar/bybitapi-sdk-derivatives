<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequestOptions;

class MarkPriceKline extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/mark-price-kline";
    }

    public function getOptionsClassname(): string
    {
        return MarkPriceKlineRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return MarkPriceKlineResponse::class;
    }
}