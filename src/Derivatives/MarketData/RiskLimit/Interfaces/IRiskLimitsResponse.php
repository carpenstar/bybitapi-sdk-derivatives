<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsResponse
{
    public function getId(): string;
    public function getSymbol(): string;
    public function getLimit(): int;
    public function getMaintainMargin(): float;
    public function getInitialMargin(): float;
    public function getIsLowerRisk(): int;
    public function getMaxLeverage(): float;
}