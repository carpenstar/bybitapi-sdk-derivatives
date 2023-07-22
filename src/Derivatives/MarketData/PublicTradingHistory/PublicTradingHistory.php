<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequestOptions;

class PublicTradingHistory extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/recent-trade";
    }

    public function getOptionsClassname(): string
    {
        return PublicTradingHistoryRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return PublicTradingHistoryResponse::class;
    }
}