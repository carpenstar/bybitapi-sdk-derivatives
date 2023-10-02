<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\GetClosedPnL;

final class TestGetClosedPnL extends GetClosedPnL
{
    use OverrideExecuteTrait;
}