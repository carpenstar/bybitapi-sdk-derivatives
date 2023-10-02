<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline;

final class TestIndexPriceKline extends IndexPriceKline
{
    use OverrideExecuteTrait;
}