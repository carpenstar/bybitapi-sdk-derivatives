<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Overrides\TestReplaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Response\ReplaceOrderResponse;
use PHPUnit\Framework\TestCase;

class ReplaceOrderTest extends TestCase
{
    static private string $replaceOrderResponse = '{"retCode":0,"retMsg":"OK","result":{"orderId":"1a1ae001-2034-4a6b-8b25-45aa9100b1ec","orderLinkId":"e80d558e-ed"}}';

    public function testReplaceOrderDTOBuilder()
    {
        $dto = ResponseDtoBuilder::make(ReplaceOrderResponse::class, json_decode(self::$replaceOrderResponse, true)['result']);
        $this->assertInstanceOf(ReplaceOrderResponse::class, $dto);
    }

    public function testReplaceOrderResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$replaceOrderResponse, CurlResponseHandler::class, GetOrderListResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testReplaceOrderEndpoint()
    {
        $endpoint = RestBuilder::make(TestReplaceOrder::class, (new ReplaceOrderRequest())->setOrderId(12345));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$replaceOrderResponse);
        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);
        $dto = $body->fetch();
        $this->assertInstanceOf(ReplaceOrderResponse::class, $dto);
    }
}