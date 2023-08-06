<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}