<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\SwitchPositionMode;

final class TestSwitchPositionMode extends SwitchPositionMode
{
    use OverrideExecuteTrait;
}