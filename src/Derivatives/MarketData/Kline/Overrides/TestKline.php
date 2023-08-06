<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline;

final class TestKline extends Kline
{
    use OverrideExecuteTrait;
}