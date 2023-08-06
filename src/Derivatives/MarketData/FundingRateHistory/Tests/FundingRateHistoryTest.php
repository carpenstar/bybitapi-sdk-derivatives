<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse;
use PHPUnit\Framework\TestCase;

class FundingRateHistoryTest extends TestCase
{
    private static string $fundingRateHistory = '{"retCode":0,"retMsg":"OK","result":{"category":"linear","list":[{"symbol":"BTCUSDT","fundingRate":"0.0001","fundingRateTimestamp":"1683993600000"},{"symbol":"BTCUSDT","fundingRate":"0.00009144","fundingRateTimestamp":"1683964800000"},{"symbol":"BTCUSDT","fundingRate":"0.0008453","fundingRateTimestamp":"1683936000000"}]},"retExtInfo":{},"time":1684004110974}';

    public function testFundingRateHistoryResponse()
    {
        $fundingRateHistoryData = ResponseHandlerBuilder::make(self::$fundingRateHistory,
            CurlResponseHandler::class, FundingRateHistoryResponse::class, EnumOutputMode::MODE_ENTITY);

        $this->assertInstanceOf(EntityCollection::class, $fundingRateHistoryData->getBody());

        $this->assertNotEmpty($fundingRateHistoryData->getBody()->count());

        /** @var FundingRateHistoryResponse $historyItem */
        while(!empty($historyItem = $fundingRateHistoryData->getBody()->fetch())) {
            $this->assertInstanceOf(FundingRateHistoryResponse::class, $historyItem);
            $this->assertIsString($historyItem->getSymbol());
            $this->assertIsFloat($historyItem->getFundingRate());
            $this->assertInstanceOf(\DateTime::class, $historyItem->getFundingRateTimestamp());
        }
    }

}