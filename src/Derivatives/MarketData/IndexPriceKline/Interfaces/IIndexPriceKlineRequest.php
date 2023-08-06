<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces;

interface IIndexPriceKlineRequest
{
    public function getCategory(): string;
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
    public function setInterval(string $interval): self;
    public function getInterval(): string;
    public function setStart(string $start): self;
    public function getStart(): string;
    public function setEnd(string $end): self;
    public function getEnd(): string;
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}