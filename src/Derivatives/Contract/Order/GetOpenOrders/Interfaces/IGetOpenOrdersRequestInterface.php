<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBaseCoin(string $baseCoin): self;
    public function setSettleCoin(string $settleCoin): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderFilter(string $orderFilter): self;
    public function setCursor(string $cursor): self;
    public function getSymbol(): string;
    public function getBaseCoin(): string;
    public function getSettleCoin(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getOrderFilter(): string;
    public function getLimit(): int;
    public function getCursor(): string;
}