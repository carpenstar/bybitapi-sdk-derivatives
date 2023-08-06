<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\MyPosition;

final class TestMyPosition extends MyPosition
{
    use OverrideExecuteTrait;
}