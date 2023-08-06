<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderResponseInterface;

class ReplaceOrderResponse extends AbstractResponse implements IReplaceOrderResponseInterface
{
    private string $orderId;
    private string $orderLinkId;

    public function __construct(array $data)
    {
        $this
            ->setOrderId($data['orderId'])
            ->setOrderLinkId($data['orderLinkId']);
    }

    private function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    private function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
        return $this;
    }

    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }
}