<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Overrides\TestWalletBalance;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Overrides\TestKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse;
use PHPUnit\Framework\TestCase;

class KlineTest extends TestCase
{
    static private string $klineResponse = '{"retCode":0,"retMsg":"OK","result":{"symbol":"BTCPERP","category": "linear","list": [["1670371200000","17077","17084","17077","17084","0.017","290.412"],["1670371140000","17074","17077.5","17074","17077","0.006","102.457"]]},"retExtInfo":{},"time":1671968612436}';

    public function testKlineTestDTOBuilder()
    {
        foreach (json_decode(self::$klineResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(KlineResponse::class, $feeRate);
            $this->assertInstanceOf(KlineResponse::class, $dto);
        }
    }

    public function testKlineTestResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$klineResponse, CurlResponseHandler::class, KlineResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testKlineTestEndpoint()
    {
        $endpoint = RestBuilder::make(TestKline::class, (new KlineRequest())->setSymbol('BTCPERP'));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$klineResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $wallet) {
            $dto = ResponseDtoBuilder::make(KlineResponse::class, $wallet);
            $this->assertInstanceOf(KlineResponse::class, $dto);
        }
    }
}