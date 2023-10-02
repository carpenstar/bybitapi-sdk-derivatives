<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest;

final class TestOpenInterest extends OpenInterest
{
    use OverrideExecuteTrait;
}