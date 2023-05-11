<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;
interface IOrderBookResponse
{
    public function getSymbol(): string;
    public function getTimestamp(): \DateTime;
    public function getUpdateId(): int;
    public function getBid(): ICollectionInterface;
    public function getAsk(): ICollectionInterface;
}