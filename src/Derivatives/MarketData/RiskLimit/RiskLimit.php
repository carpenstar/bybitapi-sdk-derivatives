<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Dto\RiskLimitsDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Options\RiskLimitsOptions;

class RiskLimit extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/risk-limit/list";

    public function getRequestOptionsDTOClass(): string
    {
        return RiskLimitsOptions::class;
    }

    protected function getResponseDTOClass(): string
    {
        return RiskLimitsDto::class;
    }
}