<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\TickerInfo;

final class TestTickerInfo extends TickerInfo
{
    use OverrideExecuteTrait;
}