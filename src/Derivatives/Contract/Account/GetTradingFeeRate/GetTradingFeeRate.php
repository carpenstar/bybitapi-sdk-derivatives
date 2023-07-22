<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateAbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequestOptions;

class GetTradingFeeRate extends PrivateEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/account/fee-rate";
    }

    protected function getResponseClassname(): string
    {
        return GetTradingFeeRateAbstractResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return GetTradingFeeRateRequestOptions::class;
    }
}