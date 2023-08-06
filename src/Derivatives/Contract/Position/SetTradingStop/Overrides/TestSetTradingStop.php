<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\SetTradingStop;

final class TestSetTradingStop extends SetTradingStop
{
    use OverrideExecuteTrait;
}