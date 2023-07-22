<?php
namespace Carpenstar\ByBitAPI\Tests\Derivatives\MarketData;

use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponse;
use PHPUnit\Framework\TestCase;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryAbstractResponse;

class FundingRateHistoryTest extends TestCase
{
    private static string $fundingRateHistory = '{"retCode":0,"retMsg":"OK","result":{"category":"linear","list":[{"symbol":"BTCUSDT","fundingRate":"0.0001","fundingRateTimestamp":"1683993600000"},{"symbol":"BTCUSDT","fundingRate":"0.00009144","fundingRateTimestamp":"1683964800000"},{"symbol":"BTCUSDT","fundingRate":"0.0008453","fundingRateTimestamp":"1683936000000"}]},"retExtInfo":{},"time":1684004110974}';

    public function testFundingRateHistoryResponse()
    {
        $fundingRateHistoryData = (new CurlResponse(self::$fundingRateHistory))
            ->bindEntity(FundingRateHistoryAbstractResponse::class)
            ->handle(EnumOutputMode::MODE_ENTITY);

        $this->assertInstanceOf(EntityCollection::class, $fundingRateHistoryData->getBody());

        $this->assertNotEmpty($fundingRateHistoryData->getBody()->count());

        /** @var FundingRateHistoryAbstractResponse $historyItem */
        while(!empty($historyItem = $fundingRateHistoryData->getBody()->fetch())) {
            $this->assertInstanceOf(FundingRateHistoryAbstractResponse::class, $historyItem);
            $this->assertIsString($historyItem->getSymbol());
            $this->assertIsFloat($historyItem->getFundingRate());
            $this->assertInstanceOf(\DateTime::class, $historyItem->getFundingRateTimestamp());
        }
    }
}