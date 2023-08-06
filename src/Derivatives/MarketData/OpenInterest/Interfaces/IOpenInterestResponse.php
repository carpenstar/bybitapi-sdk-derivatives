<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestResponse
{
    public function getOpenInterest(): float;
    public function getTimestamp(): \DateTime;
}