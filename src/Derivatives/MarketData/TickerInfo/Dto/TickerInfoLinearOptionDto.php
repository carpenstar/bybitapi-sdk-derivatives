<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Dto;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class TickerInfoLinearOptionDto extends ResponseEntity
{
    /**
     * Derivatives products category
     * @var string $category
     */
    private string $category;

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
     * @var float $bidSize
     */
    private float $bidSize;

    /**
     * Implied volatility for best bid
     * @var string $bidIv
     */
    private string $bidIv;

    /**
     * Best ask price
     * @var float $askPrice
     */
    private float $askPrice;

    /**
     * Ask quantity
     * @var float $askSize
     */
    private float $askSize;

    /**
     * Implied volatility for best ask
     * @var float $askIv
     */
    private float $askIv;

    /**
     * Last transaction price
     * @var float $lastPrice
     */
    private float $lastPrice;

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
     * Implied volatility for mark price
     * @var float $markPriceIv
     */
    private float $markPriceIv;

    /**
     * Underlying price
     * @var float $underlyingPrice
     */
    private float $underlyingPrice;

    /**
     * Open interest
     * @var float $openInterest
     */
    private float $openInterest;

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
     * Total volume
     * @var float $totalVolume
     */
    private float $totalVolume;

    /**
     * Total turnover
     * @var float $totalTurnover
     */
    private float $totalTurnover;

    /**
     * delta
     * @var float $delta
     */
    private float $delta;

    /**
     * gamma
     * @var float $gamma
     */
    private float $gamma;

    /**
     * vega
     * @var float $vega
     */
    private float $vega;

    /**
     * theta
     * @var float $theta
     */
    private float $theta;

    /**
     * Predicted delivery price. It has value when 30 min before delivery
     * @var float $predictedDeliveryPrice
     */
    private float $predictedDeliveryPrice;

    /**
     * The change in the last 24 hours
     * @var float $change24h
     */
    private float $change24h;
    
    public function __construct($data)
    {
        $this
            ->setCategory($data['category'])
            ->setSymbol($data['symbol'])
            ->setBidPrice($data['bidPrice'])
            ->setBidSize($data['bidPrice'])
            ->setBidIv($data['bidIv'])
            ->setAskPrice($data['askPrice'])
            ->setAskSize($data['askSize'])
            ->setAskIv($data['askIv'])
            ->setLastPrice($data['lastPrice'])
            ->setHighPrice24h($data['highPrice24h'])
            ->setLowPrice24h($data['lowPrice24h'])
            ->setMarkPrice($data['markPrice'])
            ->setIndexPrice($data['indexPrice'])
            ->setMarkPrice($data['markPrice'])
            ->setMarkPriceIv($data['markPriceIv'])
            ->setUnderlyingPrice($data['underlyingPrice'])
            ->setOpenInterest($data['openInterest'])
            ->setTurnover24h($data['turnover24h'])
            ->setVolume24h($data['volume24h'])
            ->setTotalVolume($data['totalVolume'])
            ->setTotalTurnover($data['totalTurnover'])
            ->setDelta($data['delta'])
            ->setGamma($data['gamma'])
            ->setVega($data['vega'])
            ->setTheta($data['theta'])
            ->setPredictedDeliveryPrice($data['predictedDeliveryPrice'])
            ->setChange24h($data['change24h']);
    }

    /**
     * @param string $category
     * @return TickerInfoLinearOptionDto
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return TickerInfoLinearOptionDto
     */
    public function setSymbol(string $symbol): self
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
     * @return TickerInfoLinearOptionDto
     */
    public function setBidPrice(float $bidPrice): self
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
     * @param float $bidSize
     * @return TickerInfoLinearOptionDto
     */
    public function setBidSize(float $bidSize): self
    {
        $this->bidSize = $bidSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getBidSize(): float
    {
        return $this->bidSize;
    }

    /**
     * @param string $bidIv
     * @return TickerInfoLinearOptionDto
     */
    public function setBidIv(string $bidIv): self
    {
        $this->bidIv = $bidIv;
        return $this;
    }

    /**
     * @return string
     */
    public function getBidIv(): string
    {
        return $this->bidIv;
    }

    /**
     * @param float $askPrice
     * @return TickerInfoLinearOptionDto
     */
    public function setAskPrice(float $askPrice): self
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
     * @param float $askSize
     * @return TickerInfoLinearOptionDto
     */
    public function setAskSize(float $askSize): self
    {
        $this->askSize = $askSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getAskSize(): float
    {
        return $this->askSize;
    }

    /**
     * @param float $askIv
     * @return TickerInfoLinearOptionDto
     */
    public function setAskIv(float $askIv): self
    {
        $this->askIv = $askIv;
        return $this;
    }

    /**
     * @return float
     */
    public function getAskIv(): float
    {
        return $this->askIv;
    }

    /**
     * @param float $lastPrice
     * @return TickerInfoLinearOptionDto
     */
    public function setLastPrice(float $lastPrice): self
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
     * @param float $highPrice24h
     * @return TickerInfoLinearOptionDto
     */
    public function setHighPrice24h(float $highPrice24h): self
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
     * @return TickerInfoLinearOptionDto
     */
    public function setLowPrice24h(float $lowPrice24h): self
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
     * @param float $markPrice
     * @return TickerInfoLinearOptionDto
     */
    public function setMarkPrice(float $markPrice): self
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
     * @return TickerInfoLinearOptionDto
     */
    public function setIndexPrice(float $indexPrice): self
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
     * @param float $markPriceIv
     * @return TickerInfoLinearOptionDto
     */
    public function setMarkPriceIv(float $markPriceIv): self
    {
        $this->markPriceIv = $markPriceIv;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkPriceIv(): float
    {
        return $this->markPriceIv;
    }

    /**
     * @param float $underlyingPrice
     * @return TickerInfoLinearOptionDto
     */
    public function setUnderlyingPrice(float $underlyingPrice): self
    {
        $this->underlyingPrice = $underlyingPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnderlyingPrice(): float
    {
        return $this->underlyingPrice;
    }

    /**
     * @param float $openInterest
     * @return TickerInfoLinearOptionDto
     */
    public function setOpenInterest(float $openInterest): self
    {
        $this->openInterest = $openInterest;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpenInterest(): float
    {
        return $this->openInterest;
    }

    /**
     * @param float $turnover24h
     * @return TickerInfoLinearOptionDto
     */
    public function setTurnover24h(float $turnover24h): self
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
     * @return TickerInfoLinearOptionDto
     */
    public function setVolume24h(float $volume24h): self
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
     * @param float $totalVolume
     * @return TickerInfoLinearOptionDto
     */
    public function setTotalVolume(float $totalVolume): self
    {
        $this->totalVolume = $totalVolume;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalVolume(): float
    {
        return $this->totalVolume;
    }

    /**
     * @param float $totalTurnover
     * @return TickerInfoLinearOptionDto
     */
    public function setTotalTurnover(float $totalTurnover): self
    {
        $this->totalTurnover = $totalTurnover;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTurnover(): float
    {
        return $this->totalTurnover;
    }

    /**
     * @param float $delta
     * @return TickerInfoLinearOptionDto
     */
    public function setDelta(float $delta): self
    {
        $this->delta = $delta;
        return $this;
    }

    /**
     * @return float
     */
    public function getDelta(): float
    {
        return $this->delta;
    }

    /**
     * @param float $gamma
     * @return TickerInfoLinearOptionDto
     */
    public function setGamma(float $gamma): self
    {
        $this->gamma = $gamma;
        return $this;
    }

    /**
     * @return float
     */
    public function getGamma(): float
    {
        return $this->gamma;
    }

    /**
     * @param float $vega
     * @return TickerInfoLinearOptionDto
     */
    public function setVega(float $vega): self
    {
        $this->vega = $vega;
        return $this;
    }

    /**
     * @return float
     */
    public function getVega(): float
    {
        return $this->vega;
    }

    /**
     * @param float $theta
     * @return TickerInfoLinearOptionDto
     */
    public function setTheta(float $theta): self
    {
        $this->theta = $theta;
        return $this;
    }

    /**
     * @return float
     */
    public function getTheta(): float
    {
        return $this->theta;
    }

    /**
     * @param float $predictedDeliveryPrice
     * @return TickerInfoLinearOptionDto
     */
    public function setPredictedDeliveryPrice(float $predictedDeliveryPrice): self
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
     * @param float $change24h
     * @return TickerInfoLinearOptionDto
     */
    public function setChange24h(float $change24h): self
    {
        $this->change24h = $change24h;
        return $this;
    }

    /**
     * @return float
     */
    public function getChange24h(): float
    {
        return $this->change24h;
    }
    
}