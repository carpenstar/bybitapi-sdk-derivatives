<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponse;
use PHPUnit\Framework\TestCase;

class InstrumentInfoTest extends TestCase
{
    private static string $indexPriceKlineApiResponse = '{"retCode":0,"retMsg":"","result":{"symbol":"ETHUSDT","category":"linear","list":[["1682935440000","1847.37","1847.65","1847.37","1847.4"],["1682935380000","1847.45","1847.57","1847.36","1847.37"],["1682935320000","1847.65","1847.79","1847.41","1847.45"],["1682935260000","1847.63","1847.66","1847.27","1847.65"],["1682935200000","1847.25","1847.68","1847.25","1847.63"]]},"retExtInfo":{},"time":1684006703286}';

    public function testInstrumentInfoResponse()
    {
        $indexPriceKlineData = ResponseHandlerBuilder::make(self::$indexPriceKlineApiResponse,
            CurlResponseHandler::class, IndexPriceKlineResponse::class, EnumOutputMode::MODE_ENTITY);

        $this->assertInstanceOf(EntityCollection::class, $indexPriceKlineData->getBody());

        $this->assertNotEmpty($indexPriceKlineData->getBody()->count());

        /** @var IndexPriceKlineResponse $klineItem */
        while(!empty($klineItem = $indexPriceKlineData->getBody()->fetch())) {
            $this->assertInstanceOf(IndexPriceKlineResponse::class, $klineItem);
            $this->assertInstanceOf(\DateTime::class, $klineItem->getStartTime());
            $this->assertIsFloat($klineItem->getOpen());
            $this->assertIsFloat($klineItem->getHigh());
            $this->assertIsFloat($klineItem->getLow());
            $this->assertIsFloat($klineItem->getClose());
        }
    }
}