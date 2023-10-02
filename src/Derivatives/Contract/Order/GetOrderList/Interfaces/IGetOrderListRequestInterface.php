<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderStatus(string $orderStatus): self;
    public function setOrderFilter(string $orderFilter): self;
    public function setLimit(int $limit): self;
    public function setCursor(string $cursor): self;
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getOrderStatus(): string;
    public function getOrderFilter(): string;
    public function getLimit(): int;
    public function getCursor(): string;
}