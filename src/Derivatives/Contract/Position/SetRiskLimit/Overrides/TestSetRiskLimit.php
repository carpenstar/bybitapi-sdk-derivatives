<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\SetRiskLimit;

final class TestSetRiskLimit extends SetRiskLimit
{
    use OverrideExecuteTrait;
}