<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces;

interface IFundingRateHistoryResponse
{
    public function getSymbol(): string;
    public function getFundingRate(): float;
    public function getFundingRateTimestamp(): \DateTime;
}