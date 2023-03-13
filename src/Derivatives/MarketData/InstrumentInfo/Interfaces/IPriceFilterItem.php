<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces;

interface IPriceFilterItem
{
    public function getMinPrice(): float;
    public function getMaxPrice(): float;
    public function getTickSize(): float;
}