<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;

interface IOrderBookRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}