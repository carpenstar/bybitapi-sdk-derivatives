<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

interface IPriceFilterItem
{
    public function getMinPrice(): float;
    public function getMaxPrice(): float;
    public function getTickSize(): float;
}