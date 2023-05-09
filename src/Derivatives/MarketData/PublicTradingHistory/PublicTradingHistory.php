<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Dto\PublicTradingHistoryDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Options\PublicTradingHistoryOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Dto\RiskLimitsDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Options\RiskLimitsOptions;

class PublicTradingHistory extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/recent-trade";

    public function getRequestOptionsDTOClass(): string
    {
        return PublicTradingHistoryOptions::class;
    }

    protected function getResponseDTOClass(): string
    {
        return PublicTradingHistoryDto::class;
    }
}