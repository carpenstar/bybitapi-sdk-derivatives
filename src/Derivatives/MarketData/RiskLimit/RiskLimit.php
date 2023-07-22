<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequestOptions;

class RiskLimit extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/risk-limit/list";
    }

    public function getOptionsClassname(): string
    {
        return RiskLimitsRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return RiskLimitsResponse::class;
    }
}