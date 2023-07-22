<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequestOptions;

class FundingRateHistory extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/funding/history-funding-rate";
    }

    public function getOptionsClassname(): string
    {
        return FundingRateHistoryRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return FundingRateHistoryResponse::class;
    }
}