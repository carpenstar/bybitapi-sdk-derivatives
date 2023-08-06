<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderId(string $orderId): self;
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}