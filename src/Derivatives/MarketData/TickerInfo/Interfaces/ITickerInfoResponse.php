<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces;

interface ITickerInfoResponse
{
    public function getSymbol(): string;
    public function getBidPrice(): float;
    public function getAskPrice(): float;
    public function getLastPrice(): float;
    public function getLastTickDirection(): string;
    public function getPrevPrice24h(): float;
    public function getPrice24hPcnt(): float;
    public function getHighPrice24h(): float;
    public function getLowPrice24h(): float;
    public function getPrevPrice1h(): float;
    public function getMarkPrice(): float;
    public function getIndexPrice(): float;
    public function getOpenInterests(): float;
    public function getTurnover24h(): float;
    public function getVolume24h(): float;
    public function getFundingRate(): float;
    public function getNextFundingTime(): \DateTime;
    public function getPredictedDeliveryPrice(): float;
    public function getBasisRate(): float;
    public function getDeliveryFeeRate(): float;
    public function getDeliveryTime(): \DateTime;
    public function getOpenInterestValue(): float;
}