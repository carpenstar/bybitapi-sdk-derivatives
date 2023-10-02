<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Overrides\TestGetOpenOrders;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response\GetOpenOrdersResponse;
use PHPUnit\Framework\TestCase;

class GetOpenOrdersTest extends TestCase
{
    static private string $getOpenOrdersResponse = '{"retCode":0,"retMsg":"OK","result":{"list":[{"symbol":"BTCUSDT","orderId":"6753a9db-3d47-4b06-8c35-599511c0fb00","side":"Buy","orderType":"Limit","stopOrderType":"UNKNOWN","price":"28000.00","qty":"0.022","timeInForce":"GoodTillCancel","orderStatus":"New","triggerPrice":"0.00","orderLinkId":"","createdTime":"1690997416487","updatedTime":"1690997416490","takeProfit":"0.00","stopLoss":"0.00","tpTriggerBy":"UNKNOWN","slTriggerBy":"UNKNOWN","triggerBy":"UNKNOWN","reduceOnly":false,"leavesQty":"0.022","leavesValue":"616","cumExecQty":"0.000","cumExecValue":"0","cumExecFee":"0","triggerDirection":0,"cancelType":"UNKNOWN","lastPriceOnCreated":"","iv":"","closeOnTrigger":false,"tpslMode":"","tpLimitPrice":"","slLimitPrice":"","smpType":"None","smpGroup":0,"smpOrderId":""}],"nextPageCursor":"ME51NFhyekVsNFlrUitoZVd0TWNGZ3FPZkVpMmswT2Z0aDdQR2g3eTMwWDFOZkNoM2tFVkNZWmYzeHVqaGpZcGgyWHQ2RGRqR3VSdElUVmdzSmJQZkE9PQ==","category":""},"retExtInfo":{},"time":1691001728355}';

    public function testGetOpenOrdersDTOBuilder()
    {
        foreach (json_decode(self::$getOpenOrdersResponse, true)['result']['list'] as $order) {
            $dto = ResponseDtoBuilder::make(GetOpenOrdersResponse::class, $order);
            $this->assertInstanceOf(GetOpenOrdersResponse::class, $dto);
        }
    }

    public function testGetOpenOrdersResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$getOpenOrdersResponse, CurlResponseHandler::class, GetOpenOrdersResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testGetOpenOrdersEndpoint()
    {
        $endpoint = RestBuilder::make(TestGetOpenOrders::class, (new GetOpenOrdersRequest())->setSymbol("BTCUSDT"));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$getOpenOrdersResponse);
        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);
        $dto = $body->fetch();
        $this->assertInstanceOf(GetOpenOrdersResponse::class, $dto);
    }
}