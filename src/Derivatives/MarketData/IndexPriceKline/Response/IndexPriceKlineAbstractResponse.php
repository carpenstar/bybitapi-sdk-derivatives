<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse;

<<<<<<<< HEAD:src/Derivatives/MarketData/IndexPriceKline/Response/IndexPriceKlineResponse.php
class IndexPriceKlineResponse extends ResponseEntity implements IIndexPriceKlineResponse
========
class IndexPriceKlineAbstractResponse extends AbstractResponse implements IIndexPriceKlineResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/IndexPriceKline/Response/IndexPriceKlineAbstractResponse.php
{
    /**
     * @var \DateTime $start
     */
    private \DateTime $start;

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

    public function __construct(array $data)
    {
        $this
            ->setStart($data[0])
            ->setOpen($data[1])
            ->setHigh($data[2])
            ->setLow($data[3])
            ->setClose($data[4]);
    }

    /**
     * @param int $start
<<<<<<<< HEAD:src/Derivatives/MarketData/IndexPriceKline/Response/IndexPriceKlineResponse.php
     * @return IndexPriceKlineResponse
========
     * @return IndexPriceKlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/IndexPriceKline/Response/IndexPriceKlineAbstractResponse.php
     */
    public function setStart(int $start): self
    {
        $this->start = DateTimeHelper::makeFromTimestamp($start);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart(): \DateTime
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
}