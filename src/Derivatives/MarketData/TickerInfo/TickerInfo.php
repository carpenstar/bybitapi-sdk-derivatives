<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequestOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response\TickerInfoResponse;

class TickerInfo extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/tickers";
    }

    public function getRequestClassname(): string
    {
        return TickerInfoRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return TickerInfoResponse::class;
    }
}