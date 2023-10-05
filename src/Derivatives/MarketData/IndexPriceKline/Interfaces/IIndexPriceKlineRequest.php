<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces;

interface IIndexPriceKlineRequest
{
    public function getCategory(): string;
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
    public function setInterval(string $interval): self;
    public function getInterval(): string;
    public function setStartTime(int $startTime): self;
    public function getStartTime(): \DateTime;
    public function setEndTime(int $endTime): self;
    public function getEndTime(): \DateTime;
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}