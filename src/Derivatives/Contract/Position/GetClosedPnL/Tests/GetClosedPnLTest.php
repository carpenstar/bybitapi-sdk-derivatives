<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Tests;

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
use PHPUnit\Framework\TestCase;

class GetClosedPnLTest extends TestCase
{
    static private string $closedPnLResponse = '{"retCode":0,"retMsg":"OK","result":{"list":[{"symbol":"ETHUSDT","orderId":"ee650123-74bf-4094-aadb-efa139d99c50","side":"Buy","qty":"0.30","orderPrice":"1314.75","orderType":"Market","execType":"Trade","closedSize":"0.30","cumEntryValue":"373.71078947","avgEntryPrice":"1245.7026","cumExitValue":"375.532","avgExitPrice":"1251.7734","closedPnl":"-2.27050237","fillCount":"2","leverage":"50","createdAt":"1670838034412"}],"nextPageCursor":"eyJza2lwX2xvY2FsX3N5bWJvbCI6ZmFsc2UsInBhZ2VfdG9rZW4iOiJleUpOSWpwN0lsOTFjM2N4WHlJNmV5SkNJam9pUVRnMlZFcEJSVWRCVVVVOUluMHNJbkJySWpwN0lrSWlPaUpLUjFac1RtcFZkMDFVU1hwTVZHTXdXVzFaZEU1RVFUVk9RekZvV1ZkU2FVeFhWbTFaVkVWNlQxZFJOVTlYVFRGTlFUMDlJbjBzSWw5emExOGlPbnNpUWlJNklrWjZRVU5XZGpWcVkyTXlSblJoTTJSQlp6MDlJbjE5ZlE9PSJ9"},"retExtInfo":{},"time":1670855140831}';

    public function testGetClosedPnLDTOBuilder()
    {
        foreach (json_decode(self::$closedPnLResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(GetClosedPnLResponse::class, $feeRate);
            $this->assertInstanceOf(GetClosedPnLResponse::class, $dto);
        }
    }

    public function testGetClosedPnLResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$closedPnLResponse, CurlResponseHandler::class, GetClosedPnLResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testGetClosedPnLEndpoint()
    {
        $endpoint = RestBuilder::make(TestGetClosedPnL::class, (new GetClosedPnLRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$closedPnLResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $wallet) {
            $dto = ResponseDtoBuilder::make(GetClosedPnLResponse::class, $wallet);
            $this->assertInstanceOf(GetClosedPnLResponse::class, $dto);
        }
    }
}