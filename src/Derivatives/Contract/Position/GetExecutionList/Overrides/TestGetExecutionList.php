<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\GetExecutionList;

final class TestGetExecutionList extends GetExecutionList
{
    use OverrideExecuteTrait;
}