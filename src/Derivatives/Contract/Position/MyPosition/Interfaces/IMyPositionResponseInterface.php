<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
{
    public function getSymbol(): string;
    public function getSide(): string;
    public function getSize(): float;
    public function getEntryPrice(): float;
    public function getLeverage(): float;
    public function getPositionValue(): float;
    public function getPositionIdx(): int;
    public function getRiskId(): int;
    public function getRiskLimitValue(): string;
    public function getTradeMode(): int;
    public function getAutoAddMargin(): int;
    public function getPositionBalance(): float;
    public function getLiqPrice(): float;
    public function getBustPrice(): float;
    public function getTpSlMode(): string;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getCreatedTime(): \DateTime;
    public function getUpdatedTime(): \DateTime;
    public function getTrailingStop(): string;
    public function getActivePrice(): float;
    public function getMarkPrice(): float;
    public function getUnrealisedPnl(): float;
    public function getCumRealisedPnl(): float;
    public function getPositionMM(): float;
    public function getPositionIM(): float;
    public function getPositionStatus(): string;
    public function getSessionAvgPrice(): float;
    public function getOccClosingFee(): float;
    public function getAdlRankIndicator(): int;
}