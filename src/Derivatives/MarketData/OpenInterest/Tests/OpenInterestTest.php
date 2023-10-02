<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Overrides\TestOpenInterest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponse;
use PHPUnit\Framework\TestCase;

class OpenInterestTest extends TestCase
{
    static private string $openInterestResponse = '{"retCode":0,"retMsg":"OK","result":{"symbol":"ETHUSDT","category":"linear","list":[{"openInterest":"411496.22000000","timestamp":"1677832800000"},{"openInterest":"411484.61000000","timestamp":"1677832500000"}],"nextPageCursor": "lastid%3D44487872"},"retExtInfo":{},"time":1677832955976}';

    public function testOpenInterestDTOBuilder()
    {
        foreach (json_decode(self::$openInterestResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(OpenInterestResponse::class, $feeRate);
            $this->assertInstanceOf(OpenInterestResponse::class, $dto);
        }
    }

    public function testOpenInterestResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$openInterestResponse, CurlResponseHandler::class, OpenInterestResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testOpenInterestEndpoint()
    {
        $endpoint = RestBuilder::make(TestOpenInterest::class, (new OpenInterestRequest())->setSymbol('ETHUSDT'));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$openInterestResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $price) {
            $dto = ResponseDtoBuilder::make(OpenInterestResponse::class, $price);
            $this->assertInstanceOf(OpenInterestResponse::class, $dto);
        }
    }
}