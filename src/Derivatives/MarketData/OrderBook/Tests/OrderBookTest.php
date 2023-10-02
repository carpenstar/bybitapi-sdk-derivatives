<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Overrides\TestOrderBook;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse;
use PHPUnit\Framework\TestCase;

class OrderBookTest extends TestCase
{
    static private string $orderBookResponse = '{"retCode":0,"retMsg":"OK","result":{"s":"BTCPERP","b":[["16818","0.156"],["16818.5","0.183"]],"a":[["16819","0.454"],["16819.5","0.054"]],"ts":1671969122791,"u":6404345},"retExtInfo":{},"time":1671969122869}';

    public function testOrderBookDTOBuilder()
    {
        $dto = ResponseDtoBuilder::make(OrderBookResponse::class, json_decode(self::$orderBookResponse, true)['result']);
        $this->assertInstanceOf(OrderBookResponse::class, $dto);
    }

    public function testOrderBookResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$orderBookResponse, CurlResponseHandler::class, OrderBookResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testOrderBookKlineEndpoint()
    {
        $endpoint = RestBuilder::make(TestOrderBook::class, (new OrderBookRequest())->setSymbol('ETHUSDT'));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$orderBookResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $price) {
            $dto = ResponseDtoBuilder::make(OrderBookResponse::class, $price);
            $this->assertInstanceOf(OrderBookResponse::class, $dto);
        }
    }
}