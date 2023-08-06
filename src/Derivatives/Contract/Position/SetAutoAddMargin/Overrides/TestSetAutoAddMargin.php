<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\SetAutoAddMargin;

final class TestSetAutoAddMargin extends SetAutoAddMargin
{
    use OverrideExecuteTrait;
}