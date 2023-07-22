<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsAbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequestOptions;

class RiskLimit extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/risk-limit/list";
    }

    public function getRequestClassname(): string
    {
        return RiskLimitsRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return RiskLimitsAbstractResponse::class;
    }
}