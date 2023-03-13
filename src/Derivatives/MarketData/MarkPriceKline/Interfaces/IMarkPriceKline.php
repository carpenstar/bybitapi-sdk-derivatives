<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces;

interface IMarkPriceKline
{
    public function getStart(): \DateTime;
    public function getOpen(): float;
    public function getHigh(): float;
    public function getLow(): float;
    public function getClose(): float;
}