<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestResponse
{
    public function getCategory(): string;
    public function getSymbol(): string;
    public function getInterval(): string;
    public function getStartTime(): \DateTime;
    public function getEndTime(): \DateTime;
    public function getLimit(): int;
    public function getCursor(): string;
}