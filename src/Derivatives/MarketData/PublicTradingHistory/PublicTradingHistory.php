<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryAbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequestOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse;

class PublicTradingHistory extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/recent-trade";
    }

    public function getRequestClassname(): string
    {
        return PublicTradingHistoryRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return PublicTradingHistoryResponse::class;
    }
}