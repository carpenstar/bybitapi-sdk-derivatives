<?php
namespace Derivatives\MarketData;

use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponse;
use PHPUnit\Framework\TestCase;

class InstrumentInfoTest extends TestCase
{
    private static string $instrumentInfoApiResponse = '{"retCode":0,"retMsg":"OK","result":{"category":"linear","list":[{"symbol":"BTCUSDT","contractType":"LinearPerpetual","status":"Trading","baseCoin":"BTC","quoteCoin":"USDT","launchTime":"1585526400000","deliveryTime":"0","deliveryFeeRate":"","priceScale":"2","leverageFilter":{"minLeverage":"1","maxLeverage":"100.00","leverageStep":"0.01"},"priceFilter":{"minPrice":"0.10","maxPrice":"199999.80","tickSize":"0.10"},"lotSizeFilter":{"maxTradingQty":"100.000","minTradingQty":"0.001","qtyStep":"0.001","postOnlyMaxOrderQty":"1000.000","maxOrderQty":"100.000","minOrderQty":"0.001"},"unifiedMarginTrade":true,"fundingInterval":480,"settleCoin":"USDT"}],"nextPageCursor":""},"retExtInfo":{},"time":1684007627987}';

    public function testInstrumentInfoResponse()
    {
        $instrumentInfoData = (new CurlResponse(self::$instrumentInfoApiResponse))
            ->bindEntity(InstrumentInfoResponse::class)
            ->handle(EnumOutputMode::MODE_ENTITY);

        $this->assertInstanceOf(EntityCollection::class, $instrumentInfoData->getBody());

        $this->assertNotEmpty($instrumentInfoData->getBody()->count());

        $instrumentInfo = $instrumentInfoData->getBody()->fetch();
        $this->assertInstanceOf(InstrumentInfoResponse::class, $instrumentInfo);
        $this->assertIsString($instrumentInfo->getSymbol());
        $this->assertIsString($instrumentInfo->getContractType());
        $this->assertIsString($instrumentInfo->getStatus());
        $this->assertIsString($instrumentInfo->getBaseCoin());
        $this->assertIsString($instrumentInfo->getQuoteCoin());
        $this->assertInstanceOf(\DateTime::class, $instrumentInfo->getLaunchTime());
        $this->assertIsFloat($instrumentInfo->getDeliveryFeeRate());
        $this->assertIsFloat($instrumentInfo->getPriceScale());
        $this->assertIsBool($instrumentInfo->getUnifiedMarginTrade());
        $this->assertIsInt($instrumentInfo->getFundingInterval());
        $this->assertIsString($instrumentInfo->getSettleCoin());

        $this->assertNotEmpty($instrumentInfo->getLeverageFilter());
        $this->assertNotEmpty($instrumentInfo->getPriceFilter());
        $this->assertNotEmpty($instrumentInfo->getLotSizeFilter());
    }
}