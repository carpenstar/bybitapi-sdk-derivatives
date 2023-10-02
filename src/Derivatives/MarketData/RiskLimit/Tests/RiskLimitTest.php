<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Overrides\TestRiskLimit;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;
use PHPUnit\Framework\TestCase;

class RiskLimitTest extends TestCase
{
    static private string $riskLimitResponse = '{"retCode":0,"retMsg":"OK","result":{"category":"","list":[{"id":1,"symbol":"ETHPERP","limit":"500000","maintainMargin":"0.01","initialMargin":"0.015","isLowestRisk":1,"maxLeverage":"66.67"}]},"retExtInfo":{},"time":1671970615467}';

    public function testRiskLimitDTOBuilder()
    {
        foreach (json_decode(self::$riskLimitResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(RiskLimitsResponse::class, $feeRate);
            $this->assertInstanceOf(RiskLimitsResponse::class, $dto);
        }
    }

    public function testRiskLimitResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$riskLimitResponse, CurlResponseHandler::class, RiskLimitsResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testRiskLimitEndpoint()
    {
        $endpoint = RestBuilder::make(TestRiskLimit::class, (new RiskLimitsRequest())->setSymbol('ETHPERP'));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$riskLimitResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $price) {
            $dto = ResponseDtoBuilder::make(RiskLimitsResponse::class, $price);
            $this->assertInstanceOf(RiskLimitsResponse::class, $dto);
        }
    }
}