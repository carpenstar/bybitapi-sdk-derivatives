<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBuyLeverage(float $buyLeverage): self;
    public function setSellLeverage(float $sellLeverage): self;
    public function getSymbol(): string;
    public function getBuyLeverage(): float;
    public function getSellLeverage(): float;
}