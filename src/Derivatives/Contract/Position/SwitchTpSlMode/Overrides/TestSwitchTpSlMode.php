<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\SwitchTpSlMode;

final class TestSwitchTpSlMode extends SwitchTpSlMode
{
    use OverrideExecuteTrait;
}