<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Tests;

use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Overrides\TestSwitchTpSlMode;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Request\SwitchTpSlModeRequest;
use PHPUnit\Framework\TestCase;

class SwitchTpSlModeTest extends TestCase
{
    static private string $switchCrossResponse = '{"retCode":0,"retMsg":"OK","result":{},"retExtInfo":{},"time":1670826151500}';

    public function testSwitchTpSlModeEndpoint()
    {
        $endpoint = RestBuilder::make(TestSwitchTpSlMode::class, (new SwitchTpSlModeRequest()));

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$switchCrossResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);
    }
}