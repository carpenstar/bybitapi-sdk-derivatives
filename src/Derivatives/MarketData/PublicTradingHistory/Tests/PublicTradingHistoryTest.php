<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Overrides\TestPublicTradingHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse;
use PHPUnit\Framework\TestCase;

class PublicTradingHistoryTest extends TestCase
{
    static private string $publicTradingHistoryResponse = '{"retCode":0,"retMsg":"OK","result":{"category":"linear","list":[{"execId":"5706445b-8543-59bc-8988-93e0f4a3f0f9","symbol":"BTCUSDT","price":"16814.50","size":"0.001","side":"Buy","time":"1671970297430","isBlockTrade":false}]},"retExtInfo":{},"time":1671970297723}';

    public function testPublicTradingHistoryDTOBuilder()
    {
        foreach (json_decode(self::$publicTradingHistoryResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(PublicTradingHistoryResponse::class, $feeRate);
            $this->assertInstanceOf(PublicTradingHistoryResponse::class, $dto);
        }
    }

    public function testPublicTradingHistoryResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$publicTradingHistoryResponse, CurlResponseHandler::class, PublicTradingHistoryResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testPublicTradingHistoryEndpoint()
    {
        $endpoint = RestBuilder::make(TestPublicTradingHistory::class, (new PublicTradingHistoryRequest())->setSymbol('ETHUSDT'));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$publicTradingHistoryResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $price) {
            $dto = ResponseDtoBuilder::make(PublicTradingHistoryResponse::class, $price);
            $this->assertInstanceOf(PublicTradingHistoryResponse::class, $dto);
        }
    }
}