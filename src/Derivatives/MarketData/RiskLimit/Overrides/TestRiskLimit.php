<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit;

final class TestRiskLimit extends RiskLimit
{
    use OverrideExecuteTrait;
}