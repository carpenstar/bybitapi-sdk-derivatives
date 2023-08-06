<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\GetOpenOrders;

final class TestGetOpenOrders extends GetOpenOrders
{
    use OverrideExecuteTrait;
}