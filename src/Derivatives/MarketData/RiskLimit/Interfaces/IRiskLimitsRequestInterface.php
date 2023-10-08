<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
}