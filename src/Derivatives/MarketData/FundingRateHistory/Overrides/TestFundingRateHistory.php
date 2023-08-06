<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory;

final class TestFundingRateHistory extends FundingRateHistory
{
    use OverrideExecuteTrait;
}