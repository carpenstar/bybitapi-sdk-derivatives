<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request\GetOrderListRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse;

class GetOrderList extends PrivateEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/list";
    }

    protected function getResponseClassname(): string
    {
        return GetOrderListResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return GetOrderListRequest::class;
    }
}