<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

interface ILeverageFilterItem
{
    public function getMinLeverage(): int;
    public function getMaxLeverage(): float;
    public function getLeverageStep(): float;
}