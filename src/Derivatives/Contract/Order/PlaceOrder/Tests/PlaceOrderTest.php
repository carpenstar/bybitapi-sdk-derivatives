<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOrderType;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Enums\EnumSide;
use Carpenstar\ByBitAPI\Core\Enums\EnumTimeInForce;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Overrides\TestPlaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse;
use PHPUnit\Framework\TestCase;

class PlaceOrderTest extends TestCase
{
    /**
     * Derivatives - Contract
     * Place Order
     */
    static private string $placeOrderResponse = '{"retCode":0,"retMsg":"OK","result":{"orderId":"dab5d5f2-c425-4620-8699-2daa56f55f7a","orderLinkId":"custom-something-order-id"},"retExtInfo":{},"time":1690993829923}';

    public function testPlaceOrderDTOBuilder()
    {
        $dto = ResponseDtoBuilder::make(PlaceOrderResponse::class, json_decode(self::$placeOrderResponse, true)['result']);
        $this->assertInstanceOf(PlaceOrderResponse::class, $dto);
        $this->assertIsString($dto->getOrderLinkId());
        $this->assertIsString($dto->getOrderId());
    }

    public function testPlaceOrderResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$placeOrderResponse, CurlResponseHandler::class, PlaceOrderResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testPlaceOrderEndpoint()
    {
        $endpoint = RestBuilder::make(TestPlaceOrder::class,
            (new PlaceOrderRequest())
                ->setSymbol("BTCUSDT")
                ->setSide(EnumSide::BUY)
                ->setOrderType(EnumOrderType::MARKET)
                ->setQty(1)
                ->setTimeInForce(EnumTimeInForce::GOOD_TILL_CANCELED_FULL)
        );

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$placeOrderResponse);
        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);
        $dto = $body->fetch();

        $this->assertInstanceOf(PlaceOrderResponse::class, $dto);
        $this->assertIsString($dto->getOrderLinkId());
        $this->assertIsString($dto->getOrderId());
    }
}