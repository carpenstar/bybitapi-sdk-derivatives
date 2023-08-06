<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Overrides\TestMyPosition;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request\MyPositionRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponse;
use PHPUnit\Framework\TestCase;

class MyPositionTest extends TestCase
{
    static private string $closedPnLResponse = '{"retCode":0,"retMsg":"OK","result":{"list":[{"positionIdx":0,"riskId":236,"symbol":"ETCUSDT","side":"Sell","size":"5.0","positionValue":"101.025","entryPrice":"20.205","tradeMode":0,"autoAddMargin":0,"leverage":"10","positionBalance":"10.1691765","liqPrice":"1606.060","bustPrice":"1606.260","takeProfit":"0.000","stopLoss":"0.000","trailingStop":"0.000","unrealisedPnl":"1.35","createdTime":"1672986751942","updatedTime":"1673419917797","tpSlMode":"Full","riskLimitValue":"200000","activePrice":"0.000","markPrice":"19.935","cumRealisedPnl":"0.02758243","positionMM":"","positionIM":"","positionStatus": "Normal","sessionAvgPrice":"0.000","occClosingFee":"4.81878","avgPrice":"20.205","adlRankIndicator":2}],"category":"","nextPageCursor":""},"retExtInfo":{},"time":1673421076067}';

    public function testMyPositionDTOBuilder()
    {
        foreach (json_decode(self::$closedPnLResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(MyPositionResponse::class, $feeRate);
            $this->assertInstanceOf(MyPositionResponse::class, $dto);
        }
    }

    public function testMyPositionResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$closedPnLResponse, CurlResponseHandler::class, MyPositionResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testMyPositionEndpoint()
    {
        $endpoint = RestBuilder::make(TestMyPosition::class, (new MyPositionRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$closedPnLResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $wallet) {
            $dto = ResponseDtoBuilder::make(MyPositionResponse::class, $wallet);
            $this->assertInstanceOf(MyPositionResponse::class, $dto);
        }
    }
}

