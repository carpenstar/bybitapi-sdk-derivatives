<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\SetLeverage;

final class TestSetLeverage extends SetLeverage
{
    use OverrideExecuteTrait;
}