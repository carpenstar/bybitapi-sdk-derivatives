<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;

interface IOrderBookPriceResponse
{
    public function getPrice(): float;
    public function getQuantity(): float;
}