<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Dto\FundingRateHistoryDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Options\FundingRateHistoryOptions;

class FundingRateHistory extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/funding/history-funding-rate";

    public function getRequestOptionsDTOClass(): string
    {
        return FundingRateHistoryOptions::class;
    }

    protected function getResponseDTOClass(): string
    {
        return FundingRateHistoryDto::class;
    }
}