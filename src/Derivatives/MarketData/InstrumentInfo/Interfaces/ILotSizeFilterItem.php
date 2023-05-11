<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

interface ILotSizeFilterItem
{
    public function getMaxOrderQty(): float;
    public function getMinOrderQty(): float;
    public function getQtyStep(): float;
}