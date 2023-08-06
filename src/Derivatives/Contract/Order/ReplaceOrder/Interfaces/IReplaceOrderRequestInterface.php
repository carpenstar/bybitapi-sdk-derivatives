<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setPrice(float $price): self;
    public function setQty(float $qty): self;
    public function setTriggerPrice(float $triggerPrice): self;
    public function setTakeProfit(float $takeProfit): self;
    public function setStopLoss(float $stopLoss): self;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function setTriggerBy(string $triggerBy): self;
    public function setTpLimitPrice(float $tpLimitPrice): self;
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getPrice(): float;
    public function getQty(): float;
    public function getTriggerPrice(): float;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getTpTriggerBy(): string;
    public function getSlTriggerBy(): string;
    public function getTriggerBy(): string;
    public function getTpLimitPrice(): float;
}