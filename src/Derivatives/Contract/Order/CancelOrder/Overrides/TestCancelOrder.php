<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\CancelOrder;

final class TestCancelOrder extends CancelOrder
{
    use OverrideExecuteTrait;
}