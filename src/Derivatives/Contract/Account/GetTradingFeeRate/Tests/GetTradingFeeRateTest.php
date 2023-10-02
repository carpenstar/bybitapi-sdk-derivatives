<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Overrides\TestGetTradingFeeRate;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse;
use PHPUnit\Framework\TestCase;

class GetTradingFeeRateTest extends TestCase
{
    static private string $tradingFeeRateResponse = '{"retCode":0,"retMsg":"OK","result":{"list":[{"symbol":"SOLUSDT","takerFeeRate": "0.0006","makerFeeRate": "0.0001"},{"symbol":"BTCUSDT","takerFeeRate": "0.0006","makerFeeRate": "0.0001"}]},"retExtInfo": {},"time": 1670924050413}';

    public function testGetTradingFeeRateDTOBuilder()
    {
        foreach (json_decode(self::$tradingFeeRateResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(GetTradingFeeRateResponse::class, $feeRate);
            $this->assertInstanceOf(GetTradingFeeRateResponse::class, $dto);
            $this->assertNotNull($dto->getSymbol());
            $this->assertNotNull($dto->getMakerFeeRate());
            $this->assertNotNull($dto->getTakerFeeRate());
        }
    }

    public function testGetTradingFeeRateResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$tradingFeeRateResponse, CurlResponseHandler::class, GetTradingFeeRateResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testGetTradingFeeRateEndpoint()
    {
        $endpoint = RestBuilder::make(TestGetTradingFeeRate::class, (new GetTradingFeeRateRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$tradingFeeRateResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $wallet) {
            $dto = ResponseDtoBuilder::make(GetTradingFeeRateResponse::class, $wallet);
            $this->assertInstanceOf(GetTradingFeeRateResponse::class, $dto);
            $this->assertNotNull($dto->getSymbol());
            $this->assertNotNull($dto->getMakerFeeRate());
            $this->assertNotNull($dto->getTakerFeeRate());
        }
    }
}