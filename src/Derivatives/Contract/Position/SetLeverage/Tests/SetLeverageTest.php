<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Tests;

use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Overrides\TestSetLeverage;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request\SetLeverageRequest;
use PHPUnit\Framework\TestCase;

class SetLeverageTest extends TestCase
{
    static private string $autoAddMarginResponse = '{"retCode":0,"retMsg":"OK","result":{},"retExtInfo":{},"time":1670826151500}';

    public function testSetLeverageEndpoint()
    {
        $endpoint = RestBuilder::make(TestSetLeverage::class, (new SetLeverageRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$autoAddMarginResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);
    }
}