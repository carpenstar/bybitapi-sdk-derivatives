<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline;

final class TestMarkPriceKline extends MarkPriceKline
{
    use OverrideExecuteTrait;
}