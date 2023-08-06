<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseInterface
{
    public function getSymbol(): string;
    public function getSide(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getOrderPrice(): float;
    public function getOrderQty(): float;
    public function getOrderType(): string;
    public function getStopOrderType(): string;
    public function getExecId(): string;
    public function getExecPrice(): float;
    public function getExecQty(): float;
    public function getExecFee(): float;
    public function getExecType(): string;
    public function getExecValue(): float;
    public function getFeeRate(): float;
    public function getLastLiquidityInd(): string;
    public function isMaker(): bool;
    public function getLeavesQty(): float;
    public function getClosedSize(): float;
    public function getBlockTradeId(): string;
    public function getMarkPrice(): float;
    public function getIndexPrice(): float;
    public function getUnderlyingPrice(): float;
    public function getExecTime(): \DateTime;
}