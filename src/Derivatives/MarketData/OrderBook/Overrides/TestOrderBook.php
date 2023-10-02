<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook;

final class TestOrderBook extends OrderBook
{
    use OverrideExecuteTrait;
}