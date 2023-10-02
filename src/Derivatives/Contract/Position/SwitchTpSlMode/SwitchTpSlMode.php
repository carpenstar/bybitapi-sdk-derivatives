<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IPostEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Request\SwitchTpSlModeRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Response\SwitchTpSlModeResponse;

class SwitchTpSlMode extends PrivateEndpoint implements IPostEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/switch-tpsl-mode";
    }

    protected function getResponseClassname(): string
    {
        return SwitchTpSlModeResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return SwitchTpSlModeRequest::class;
    }
}