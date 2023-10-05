<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setInterval(string $interval): self;
    public function setStartTime(int $startTime): self;
    public function setEndTime(int $endTime): self;
    public function setLimit(int $limit): self;
    public function getCategory(): string;
    public function getSymbol(): string;
    public function getInterval(): string;
    public function getStartTime(): \DateTime;
    public function getEndTime(): \DateTime;
    public function getLimit(): int;
}