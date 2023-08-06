<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance;

final class TestWalletBalance extends WalletBalance
{
    use OverrideExecuteTrait;
}