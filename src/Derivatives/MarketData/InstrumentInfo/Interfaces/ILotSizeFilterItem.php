<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces;

interface ILotSizeFilterItem
{
    public function getMaxOrderQty(): float;
    public function getMinOrderQty(): float;
    public function getQtyStep(): float;
}