<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces;

interface ISetTradingStopRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setTakeProfit(float $takeProfit): self;
    public function setStopLoss(float $stopLoss): self;
    public function setTpslMode(string $tpslMode): self;
    public function setTpSize(float $tpSize): self;
    public function setSlSize(float $slSize): self;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function setTrailingStop(float $trailingStop): self;
    public function setActivePrice(float $activePrice): self;
    public function setTpLimitPrice(float $tpLimitPrice): self;
    public function setSlLimitPrice(float $slLimitPrice): self;
    public function setTpOrderType(string $tpOrderType): self;
    public function setSlOrderType(string $slOrderType): self;
    public function setPositionIdx(int $positionIdx): self;
    public function getSymbol(): string;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getTpslMode(): string;
    public function getTpSize(): float;
    public function getSlSize(): float;
    public function getTpTriggerBy(): string;
    public function getSlTriggerBy(): string;
    public function getTrailingStop(): float;
    public function getActivePrice(): float;
    public function getTpLimitPrice(): float;
    public function getSlLimitPrice(): float;
    public function getTpOrderType(): string;
    public function getSlOrderType(): string;
    public function getPositionIdx(): int;
}