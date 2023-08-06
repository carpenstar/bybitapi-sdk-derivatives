<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Overrides\TestGetClosedPnL;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Overrides\TestGetExecutionList;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Request\GetExecutionListRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponse;
use PHPUnit\Framework\TestCase;

class GetExecutionListTest extends TestCase
{
    static private string $closedPnLResponse = '{"retCode":0,"retMsg":"OK","result":{"list":[{"symbol":"ETHUSDT","execFee":"-0.08720013","execId":"208751d8-f70e-4570-a5fd-d208c82af99d","execPrice":"1263.77","execQty":"0.69","execType":"Funding","execValue":"872.0013","feeRate":"-0.0001","lastLiquidityInd":"UNKNOWN","leavesQty":"0.00","orderId":"1673136000-ETHUSDT-592334-Sell","orderLinkId":"","orderPrice":"0.00","orderQty":"0.00","orderType":"UNKNOWN","stopOrderType":"UNKNOWN","side":"Sell","execTime":"1673136000000","closedSize":"0.00","iv":"","blockTradeId":"","markPrice":"","markIv":"","underlyingPrice":"","indexPrice":"","isMaker":false}],"nextPageCursor": "ZzU3NlU4M1JlLzhFTWkzeW9hemRVcitqUk4wVW9LL21KVTRWV3JPR0tYTG9uTENWSkFvUDJuWk44OVBlNnB0ZjJHTTFwdlJRV0tpZFM0Z0RzUlQ0d2FSbzVRN2lpZ0ZrZmt2UTZuRlJVSHdQSHdoYXUvdDN6aExzOEpmcDNFY2NLc2dYTnRvOXhmTmY3NVNreVgzQ2RKUFZtekptU0NQNU1rOWd5YzZRV1ZDejVFM0t0MGdlMENNc04ybzQvc2JQQ3BVRkQycHU3MFdBK3RqdFlWaVRkMTNGQmZRUUZpaVc4MkE1SnRCT09iZDRNL2FlNDVSMithdU96NTROWGFxcTFucW1MSnJSaTluM29pZm85dHVkNzJMSVQwODk4UTJLbHEybDJ0Uk9UYmtCcU5ScU9zZWRCa2Znc0dwbmNEOWJoaCtnZkRkWjlrMEl6elRmWnljeHZpYXBPWVdzZSs0UEtvdnZ4cTJHQ2JZcm1UQkU3TXFKS01yU1dmaloyT3pVS1psbmVaamh3N3Ntc0hFbEgwckxtQT09","category":""},"retExtInfo":{},"time":1673150404910}';

    public function testGetExecutionListDTOBuilder()
    {
        foreach (json_decode(self::$closedPnLResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(GetExecutionListResponse::class, $feeRate);
            $this->assertInstanceOf(GetExecutionListResponse::class, $dto);
        }
    }

    public function testGetExecutionListResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$closedPnLResponse, CurlResponseHandler::class, GetExecutionListResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testGetExecutionListEndpoint()
    {
        $endpoint = RestBuilder::make(TestGetExecutionList::class, (new GetExecutionListRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$closedPnLResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $wallet) {
            $dto = ResponseDtoBuilder::make(GetExecutionListResponse::class, $wallet);
            $this->assertInstanceOf(GetExecutionListResponse::class, $dto);
        }
    }
}

