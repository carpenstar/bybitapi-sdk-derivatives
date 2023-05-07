<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IPKKlineItem;

class KKlineItem extends ResponseEntity
{
    /**
     * @var float $start
     */
    private float $start;

    /**
     * @var float $open
     */
    private float $open;

    /**
     * @var float $high
     */
    private float $high;

    /**
     * @var float $low
     */
    private float $low;

    /**
     * @var float $close
     */
    private float $close;

    /**
     * @var float $volume
     */
    private float $volume;

    /**
     * @var float $turnover
     */
    private float $turnover;

    public function __construct(array $data)
    {
        $this
            ->setStart($data[0])
            ->setOpen($data[1])
            ->setHigh($data[2])
            ->setLow($data[3])
            ->setClose($data[4])
            ->setVolume($data[5])
            ->setTurnover($data[6]);
    }

    /**
     * @param float $start
     * @return IPKKlineItem
     */
    public function setStart(float $start): self
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return float
     */
    public function getStart(): float
    {
        return $this->start;
    }

    /**
     * @param float $open
     * @return $this
     */
    private function setOpen(float $open): self
    {
        $this->open = $open;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpen(): float
    {
        return $this->open;
    }

    /**
     * @param float $high
     * @return $this
     */
    private function setHigh(float $high): self
    {
        $this->high = $high;
        return $this;
    }

    /**
     * @return float
     */
    public function getHigh(): float
    {
        return $this->high;
    }

    /**
     * @param float $low
     * @return $this
     */
    private function setLow(float $low): self
    {
        $this->low = $low;
        return $this;
    }

    /**
     * @return float
     */
    public function getLow(): float
    {
        return $this->low;
    }

    /**
     * @param float $close
     * @return $this
     */
    private function setClose(float $close): self
    {
        $this->close = $close;
        return $this;
    }

    /**
     * @return float
     */
    public function getClose(): float
    {
        return $this->close;
    }

    /**
     * @param float $volume
     * @return KKlineItem
     */
    private function setVolume(float $volume): self
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @param float $turnover
     * @return KKlineItem
     */
    public function setTurnover(float $turnover): self
    {
        $this->turnover = $turnover;
        return $this;
    }

    /**
     * @return float
     */
    public function getTurnover(): float
    {
        return $this->turnover;
    }
}