<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces;

interface ITickerInfoRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
}