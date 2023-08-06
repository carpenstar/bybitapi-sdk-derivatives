<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Overrides\TestMarkPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse;
use PHPUnit\Framework\TestCase;

class MarkPriceKlineTest extends TestCase
{
    static private string $markPriceKlineResponse = '{"retCode":0,"retMsg":"OK","result":{"symbol":"BTCUSD","category":"inverse","list":[["1670261280000","17064.76","17068.45","17063.5","17067"],["1670261220000","17062.5","17064.88","17062.5","17064.76"],["1670261160000","17064","17064","17062.5","17062.5"],["1670261100000","17072","17072","17064","17064"]]},"retExtInfo":{},"time":1671968706092}';

    public function testMarkPriceKlineDTOBuilder()
    {
        foreach (json_decode(self::$markPriceKlineResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(MarkPriceKlineResponse::class, $feeRate);
            $this->assertInstanceOf(MarkPriceKlineResponse::class, $dto);
        }
    }

    public function testMarkPriceKlineResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$markPriceKlineResponse, CurlResponseHandler::class, MarkPriceKlineResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testMarkPriceKlineEndpoint()
    {
        $endpoint = RestBuilder::make(TestMarkPriceKline::class, (new MarkPriceKlineRequest())->setSymbol('BTCPERP'));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$markPriceKlineResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $price) {
            $dto = ResponseDtoBuilder::make(MarkPriceKlineResponse::class, $price);
            $this->assertInstanceOf(MarkPriceKlineResponse::class, $dto);
        }
    }
}