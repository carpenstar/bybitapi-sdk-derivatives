<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IPostEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Request\SetRiskLimitRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Response\SetRiskLimitResponse;

class SetRiskLimit extends PrivateEndpoint implements IPostEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/set-risk-limit";
    }

    protected function getResponseClassname(): string
    {
        return SetRiskLimitResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return SetRiskLimitRequest::class;
    }
}