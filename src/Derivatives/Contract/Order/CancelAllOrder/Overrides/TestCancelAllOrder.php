<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\CancelAllOrder;

final class TestCancelAllOrder extends CancelAllOrder
{
    use OverrideExecuteTrait;
}