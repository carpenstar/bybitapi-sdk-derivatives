<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getSide(): string;
    public function getQty(): float;
    public function getLeverage(): float;
    public function getOrderPrice(): float;
    public function getOrderType(): string;
    public function getExecType(): string;
    public function getClosedSize(): float;
    public function getCumEntryValue(): float;
    public function getAvgEntryPrice(): float;
    public function getCumExitValue(): float;
    public function getAvgExitPrice(): float;
    public function getClosedPnl(): float;
    public function getFillCount(): int;
    public function getCreatedAt(): \DateTime;
}