<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Overrides\TestCancelAllOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request\CancelAllOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response\CancelAllOrderResponse;
use PHPUnit\Framework\TestCase;

class CancelAllOrderTest extends TestCase
{
    static private string $cancelAllOrderResponse = '{"retCode":0,"retMsg":"OK","result":{"list":[{"category":"linear","symbol":"ETHUSDT","orderId":"6cba55ea-6996-44f5-bd0f-ac09ffda4ab1","orderLinkId": "liang-001"}]},"retExtInfo":{"list":[{"code":0,"msg":"success"}]},"time": 1672810388787}';

    public function testCancelAllOrderDTOBuilder()
    {
        foreach (json_decode(self::$cancelAllOrderResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(CancelAllOrderResponse::class, $feeRate);
            $this->assertInstanceOf(CancelAllOrderResponse::class, $dto);
        }
    }

    public function testCancelAllOrderResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$cancelAllOrderResponse, CurlResponseHandler::class, CancelAllOrderResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testCancelAllOrderEndpoint()
    {
        $endpoint = RestBuilder::make(TestCancelAllOrder::class, (new CancelAllOrderRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$cancelAllOrderResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $wallet) {
            $dto = ResponseDtoBuilder::make(CancelAllOrderResponse::class, $wallet);
            $this->assertInstanceOf(CancelAllOrderResponse::class, $dto);
        }
    }
}