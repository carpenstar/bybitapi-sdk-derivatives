<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory;

final class TestPublicTradingHistory extends PublicTradingHistory
{
    use OverrideExecuteTrait;
}