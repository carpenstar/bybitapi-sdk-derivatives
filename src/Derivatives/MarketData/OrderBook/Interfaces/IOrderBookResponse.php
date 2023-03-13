<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;
use Carpenstar\ByBitAPI\Core\Interfaces\ICollectionInterface;

interface IOrderBookResponse
{
    public function getSymbol(): string;
    public function getTimestamp(): \DateTime;
    public function getUpdateId(): int;
    public function getBid(): ICollectionInterface;
    public function getAsk(): ICollectionInterface;
}