<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo;

final class TestInstrumentInfo extends InstrumentInfo
{
    use OverrideExecuteTrait;
}