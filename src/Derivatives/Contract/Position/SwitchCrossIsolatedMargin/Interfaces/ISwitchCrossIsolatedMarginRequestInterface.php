<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setTradeMode(int $tradeMode): self;
    public function setBuyLeverage(float $buyLeverage): self;
    public function setSellLeverage(float $sellLeverage): self;
    public function getSymbol(): string;
    public function getTradeMode(): int;
    public function getBuyLeverage(): float;
    public function getSellLeverage(): float;
}