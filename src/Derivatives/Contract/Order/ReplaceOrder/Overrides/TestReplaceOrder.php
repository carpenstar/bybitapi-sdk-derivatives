<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\ReplaceOrder;

final class TestReplaceOrder extends ReplaceOrder
{
    use OverrideExecuteTrait;
}