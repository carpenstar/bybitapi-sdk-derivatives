<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Tests;

use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Overrides\TestSetRiskLimit;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Request\SetRiskLimitRequest;
use PHPUnit\Framework\TestCase;

class SetRiskLimitTest extends TestCase
{
    static private string $riskLimitResponse = '{"retCode":0,"retMsg":"OK","result":{},"retExtInfo":{},"time":1670826151500}';

    public function testSetRiskLimitEndpoint()
    {
        $endpoint = RestBuilder::make(TestSetRiskLimit::class, (new SetRiskLimitRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$riskLimitResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);
    }
}