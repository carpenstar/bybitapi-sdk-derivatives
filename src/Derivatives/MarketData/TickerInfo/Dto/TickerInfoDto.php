<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Dto;


use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class TickerInfoDto extends ResponseEntity
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Best bid price
     * @var float $bidPrice
     */
    private float $bidPrice;

    /**
     * Best ask price
     * @var float $askPrice
     */
    private float $askPrice;

    /**
     * Last transaction price
     * @var float $lastPrice
     */
    private float $lastPrice;

    /**
     * Direction of price change
     * @var string $lastTickDirection
     */
    private string $lastTickDirection;

    /**
     * Price of 24 hours ago
     * @var float $prevPrice24h
     */
    private float $prevPrice24h;

    /**
     * Percentage change of market price relative to 24h
     * @var float $price24hPcnt
     */
    private float $price24hPcnt;

    /**
     * The highest price in the last 24 hours
     * @var float $highPrice24h
     */
    private float $highPrice24h;

    /**
     * Lowest price in the last 24 hours
     * @var float $lowPrice24h
     */
    private float $lowPrice24h;

    /**
     * Hourly market price an hour ago
     * @var float $prevPrice1h
     */
    private float $prevPrice1h;

    /**
     * Mark price
     * @var float $markPrice
     */
    private float $markPrice;

    /**
     * Index price
     * @var float $indexPrice
     */
    private float $indexPrice;

    /**
     * Open interest
     * @var float $openInterests
     */
    private ?float $openInterests;

    /**
     * Turnover in the last 24 hours
     * @var float $turnover24h
     */
    private float $turnover24h;

    /**
     * Trading volume in the last 24 hours
     * @var float $volume24h
     */
    private float $volume24h;

    /**
     * Funding rate
     * @var float $fundingRate
     */
    private float $fundingRate;

    /**
     * Next timestamp for funding to settle
     * @var \DateTime $nextFundingTime
     */
    private \DateTime $nextFundingTime;

    /**
     * Predicted delivery price. It has value when 30 min before delivery
     * @var float $predictedDeliveryPrice
     */
    private ?float $predictedDeliveryPrice;

    /**
     * Basis rate for futures
     * @var float $basisRate
     */
    private float $basisRate;

    /**
     * Delivery fee rate
     * @var float $deliveryFeeRate
     */
    private float $deliveryFeeRate;

    /**
     * Delivery timestamp (ms)
     * @var \DateTime $deliveryTime
     */
    private \DateTime $deliveryTime;

    /**
     * Open interest value
     * @var float $openInterestValue
     */
    private float $openInterestValue;

    public function __construct(array $data)
    {

        $this
            ->setSymbol($data['symbol'])
            ->setBidPrice($data['bidPrice'])
            ->setAskPrice($data['askPrice'])
            ->setLastPrice($data['lastPrice'])
            ->setLastTickDirection($data['lastTickDirection'])
            ->setPrevPrice24h($data['prevPrice24h'])
            ->setPrice24hPcnt($data['price24hPcnt'])
            ->setHighPrice24h($data['highPrice24h'])
            ->setLowPrice24h($data['lowPrice24h'])
            ->setPrevPrice1h($data['prevPrice1h'])
            ->setMarkPrice($data['markPrice'])
            ->setIndexPrice($data['indexPrice'])
            ->setOpenInterests($data['openInterest'])
            ->setTurnover24h($data['turnover24h'])
            ->setVolume24h($data['volume24h'])
            ->setFundingRate($data['fundingRate'])
            ->setNextFundingTime($data['nextFundingTime'])
            ->setPredictedDeliveryPrice((float)$data['predictedDeliveryPrice'])
            ->setBasisRate((float)$data['basisRate'])
            ->setDeliveryFeeRate((float)$data['deliveryFeeRate'])
            ->setDeliveryTime($data['deliveryTime'])
            ->setOpenInterestValue($data['openInterestValue']);
    }

    /**
     * @param string $symbol
     * @return TickerInfoDto
     */
    private function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param float $bidPrice
     * @return TickerInfoDto
     */
    private function setBidPrice(float $bidPrice): self
    {
        $this->bidPrice = $bidPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getBidPrice(): float
    {
        return $this->bidPrice;
    }

    /**
     * @param float $askPrice
     * @return TickerInfoDto
     */
    private function setAskPrice(float $askPrice): self
    {
        $this->askPrice = $askPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getAskPrice(): float
    {
        return $this->askPrice;
    }

    /**
     * @param float $lastPrice
     * @return TickerInfoDto
     */
    private function setLastPrice(float $lastPrice): self
    {
        $this->lastPrice = $lastPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getLastPrice(): float
    {
        return $this->lastPrice;
    }

    /**
     * @param string $lastTickDirection
     * @return TickerInfoDto
     */
    private function setLastTickDirection(string $lastTickDirection): self
    {
        $this->lastTickDirection = $lastTickDirection;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastTickDirection(): string
    {
        return $this->lastTickDirection;
    }

    /**
     * @param float $prevPrice24h
     * @return TickerInfoDto
     */
    private function setPrevPrice24h(float $prevPrice24h): self
    {
        $this->prevPrice24h = $prevPrice24h;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrevPrice24h(): float
    {
        return $this->prevPrice24h;
    }

    /**
     * @param float $price24hPcnt
     * @return TickerInfoDto
     */
    private function setPrice24hPcnt(float $price24hPcnt): self
    {
        $this->price24hPcnt = $price24hPcnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice24hPcnt(): float
    {
        return $this->price24hPcnt;
    }

    /**
     * @param float $highPrice24h
     * @return TickerInfoDto
     */
    private function setHighPrice24h(float $highPrice24h): self
    {
        $this->highPrice24h = $highPrice24h;
        return $this;
    }

    /**
     * @return float
     */
    public function getHighPrice24h(): float
    {
        return $this->highPrice24h;
    }

    /**
     * @param float $lowPrice24h
     * @return TickerInfoDto
     */
    private function setLowPrice24h(float $lowPrice24h): self
    {
        $this->lowPrice24h = $lowPrice24h;
        return $this;
    }

    /**
     * @return float
     */
    public function getLowPrice24h(): float
    {
        return $this->lowPrice24h;
    }

    /**
     * @param float $prevPrice1h
     * @return TickerInfoDto
     */
    private function setPrevPrice1h(float $prevPrice1h): self
    {
        $this->prevPrice1h = $prevPrice1h;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrevPrice1h(): float
    {
        return $this->prevPrice1h;
    }

    /**
     * @param float $markPrice
     * @return TickerInfoDto
     */
    private function setMarkPrice(float $markPrice): self
    {
        $this->markPrice = $markPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkPrice(): float
    {
        return $this->markPrice;
    }

    /**
     * @param float $indexPrice
     * @return TickerInfoDto
     */
    private function setIndexPrice(float $indexPrice): self
    {
        $this->indexPrice = $indexPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getIndexPrice(): float
    {
        return $this->indexPrice;
    }

    /**
     * @param float $openInterests
     * @return TickerInfoDto
     */
    private function setOpenInterests(?float $openInterests): self
    {
        $this->openInterests = $openInterests;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpenInterests(): float
    {
        return (float)$this->openInterests;
    }

    /**
     * @param float $turnover24h
     * @return TickerInfoDto
     */
    private function setTurnover24h(float $turnover24h): self
    {
        $this->turnover24h = $turnover24h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTurnover24h(): float
    {
        return $this->turnover24h;
    }

    /**
     * @param float $volume24h
     * @return TickerInfoDto
     */
    private function setVolume24h(float $volume24h): self
    {
        $this->volume24h = $volume24h;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume24h(): float
    {
        return $this->volume24h;
    }

    /**
     * @param float $fundingRate
     * @return TickerInfoDto
     */
    private function setFundingRate(float $fundingRate): self
    {
        $this->fundingRate = $fundingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getFundingRate(): float
    {
        return $this->fundingRate;
    }

    /**
     * @param string $nextFundingTime
     * @return TickerInfoDto
     */
    private function setNextFundingTime(string $nextFundingTime): self
    {
        $this->nextFundingTime = DateTimeHelper::makeFromTimestamp($nextFundingTime);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextFundingTime(): \DateTime
    {
        return $this->nextFundingTime;
    }

    /**
     * @param float $predictedDeliveryPrice
     * @return TickerInfoDto
     */
    private function setPredictedDeliveryPrice(?float $predictedDeliveryPrice): self
    {
        $this->predictedDeliveryPrice = $predictedDeliveryPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getPredictedDeliveryPrice(): float
    {
        return $this->predictedDeliveryPrice;
    }

    /**
     * @param float $basisRate
     * @return TickerInfoDto
     */
    private function setBasisRate(float $basisRate): self
    {
        $this->basisRate = $basisRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasisRate(): float
    {
        return $this->basisRate;
    }

    /**
     * @param float $deliveryFeeRate
     * @return TickerInfoDto
     */
    private function setDeliveryFeeRate(float $deliveryFeeRate): self
    {
        $this->deliveryFeeRate = $deliveryFeeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryFeeRate(): float
    {
        return $this->deliveryFeeRate;
    }

    /**
     * @param string $deliveryTime
     * @return TickerInfoDto
     */
    private function setDeliveryTime(string $deliveryTime): self
    {
        $this->deliveryTime = DateTimeHelper::makeFromTimestamp($deliveryTime);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryTime(): \DateTime
    {
        return $this->deliveryTime;
    }

    /**
     * @param float $openInterestValue
     * @return TickerInfoDto
     */
    private function setOpenInterestValue(float $openInterestValue): self
    {
        $this->openInterestValue = $openInterestValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpenInterestValue(): float
    {
        return $this->openInterestValue;
    }
}