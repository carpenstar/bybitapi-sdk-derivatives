<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\SwitchCrossIsolatedMargin;

final class TestSwitchCrossIsolatedMargin extends SwitchCrossIsolatedMargin
{
    use OverrideExecuteTrait;
}