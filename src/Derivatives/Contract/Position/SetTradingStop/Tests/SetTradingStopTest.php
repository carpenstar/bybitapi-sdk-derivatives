<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Tests;

use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Overrides\TestSetTradingStop;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Request\SetTradingStopRequest;
use PHPUnit\Framework\TestCase;

class SetTradingStopTest extends TestCase
{
    static private string $tradingStopResponse = '{"retCode":0,"retMsg":"OK","result":{},"retExtInfo":{},"time":1670826151500}';

    public function testSetTradingStopEndpoint()
    {
        $endpoint = RestBuilder::make(TestSetTradingStop::class, (new SetTradingStopRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$tradingStopResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);
    }
}