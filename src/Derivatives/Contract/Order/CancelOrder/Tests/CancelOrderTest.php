<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Overrides\TestCancelOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse;
use PHPUnit\Framework\TestCase;

class CancelOrderTest extends TestCase
{
    static private string $cancelOrderResponse = '{"retCode":0,"retMsg":"OK","result":{"orderId":"4c51a45f-7795-4b38-9b66-3c306b73f112","orderLinkId":"e80d558e-ed"}}';

    public function testCancelOrderDTOBuilder()
    {
        $dto = ResponseDtoBuilder::make(CancelOrderResponse::class, json_decode(self::$cancelOrderResponse, true)['result']);
        $this->assertInstanceOf(CancelOrderResponse::class, $dto);
    }

    public function testCancelOrderResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$cancelOrderResponse, CurlResponseHandler::class, CancelOrderResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testCancelOrderEndpoint()
    {
        $endpoint = RestBuilder::make(TestCancelOrder::class, (new CancelOrderRequest())->setOrderId(12345));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$cancelOrderResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $wallet) {
            $dto = ResponseDtoBuilder::make(CancelOrderResponse::class, $wallet);
            $this->assertInstanceOf(CancelOrderResponse::class, $dto);
        }
    }
}