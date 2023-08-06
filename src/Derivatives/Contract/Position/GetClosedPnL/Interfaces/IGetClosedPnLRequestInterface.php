<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setStartTime(int $startTime): self;
    public function setEndTime(int $endTime): self;
    public function setLimit(int $limit): self;
    public function setCursor(string $cursor): self;
    public function getSymbol(): string;
    public function getStartTime(): int;
    public function getEndTime(): int;
    public function getLimit(): int;
    public function getCursor(): string;
}