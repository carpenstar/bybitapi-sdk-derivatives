<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getSide(): string;
    public function getOrderType(): string;
    public function getPrice(): float;
    public function getQty(): float;
    public function getTimeInForce(): string;
    public function getOrderStatus(): string;
    public function getPositionIdx(): int;
    public function getLastPriceOnCreated(): float;
    public function getCreatedTime(): \DateTime;
    public function getUpdatedTime(): \DateTime;
    public function getCancelType(): string;
    public function getRejectReason(): string;
    public function getStopOrderType(): string;
    public function getTriggerDirection(): int;
    public function getTriggerBy(): string;
    public function getTriggerPrice(): float;
    public function getCumExecValue(): float;
    public function getCumExecFee(): float;
    public function getCumExecQty(): float;
    public function getLeavesValue(): float;
    public function getLeavesQty(): float;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getTpslMode(): string;
    public function getTpLimitPrice(): float;
    public function getSlLimitPrice(): float;
    public function getTpTriggerBy(): string;
    public function getSlTriggerBy(): string;
    public function isReduceOnly(): bool;
    public function isCloseOnTrigger(): bool;
    public function getBlockTradeId(): string;
    public function getSmpType(): string;
    public function getSmpGroup(): int;
    public function getSmpOrderId(): string;
}