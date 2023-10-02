<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Overrides\TestGetOrderList;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request\GetOrderListRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse;
use PHPUnit\Framework\TestCase;

class GetOrderListTest extends TestCase
{
    static private string $getOrderListResponse = '{"retCode":0,"retMsg":"OK","result":{"nextPageCursor":"c6f055d9-7f21-4079-913d-e6523a9cfffa%3A1672216686849%2Cc6f055d9-7f21-4079-913d-e6523a9cfffa%3A1672216686849","category":"linear","list":[{"symbol":"ETHPERP","orderType":"Limit","orderLinkId":"linear-004","orderId":"c6f055d9-7f21-4079-913d-e6523a9cfffa","stopOrderType":"Stop","orderStatus":"Deactivated","takeProfit":"","cumExecValue":"0","blockTradeId":"","rejectReason":"EC_NoError","price":"1050","createdTime":1672216686849,"tpTriggerBy":"UNKNOWN","timeInForce":"GoodTillCancel","basePrice":"1188","leavesValue":"0","updatedTime":1672217377166,"side":"Sell","triggerPrice":"1145.00000000","cumExecFee":"0","slTriggerBy":"UNKNOWN","leavesQty":"0","closeOnTrigger":false,"cumExecQty":"0","reduceOnly":false,"qty":"0.15","stopLoss":"","triggerBy":"MarkPrice","orderIM":""}]},"retExtInfo":{},"time":1672811958171}';

    public function testGetOrderListDTOBuilder()
    {
        foreach (json_decode(self::$getOrderListResponse, true)['result']['list'] as $order) {
            $dto = ResponseDtoBuilder::make(GetOrderListResponse::class, $order);
            $this->assertInstanceOf(GetOrderListResponse::class, $dto);
        }
    }

    public function testGetOrderListResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$getOrderListResponse, CurlResponseHandler::class, GetOrderListResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testGetOrderListEndpoint()
    {
        $endpoint = RestBuilder::make(TestGetOrderList::class, (new GetOrderListRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$getOrderListResponse);
        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);
        $dto = $body->fetch();
        $this->assertInstanceOf(GetOrderListResponse::class, $dto);
    }
}