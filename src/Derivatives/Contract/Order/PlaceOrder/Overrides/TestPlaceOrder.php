<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder;

final class TestPlaceOrder extends PlaceOrder
{
    use OverrideExecuteTrait;
}