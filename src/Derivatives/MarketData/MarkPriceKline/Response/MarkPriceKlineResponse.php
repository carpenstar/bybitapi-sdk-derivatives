<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline;

class MarkPriceKlineResponse extends AbstractResponse implements IMarkPriceKline
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
<<<<<<<< HEAD:src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineResponse.php
     * @return MarkPriceKlineResponse
========
     * @return MarkPriceKlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineAbstractResponse.php
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
<<<<<<<< HEAD:src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineResponse.php
     * @return MarkPriceKlineResponse
========
     * @return MarkPriceKlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineAbstractResponse.php
     */
    public function setOpen(float $open): self
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
<<<<<<<< HEAD:src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineResponse.php
     * @return MarkPriceKlineResponse
========
     * @return MarkPriceKlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineAbstractResponse.php
     */
    public function setHigh(float $high): self
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
<<<<<<<< HEAD:src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineResponse.php
     * @return MarkPriceKlineResponse
========
     * @return MarkPriceKlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineAbstractResponse.php
     */
    public function setLow(float $low): self
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
<<<<<<<< HEAD:src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineResponse.php
     * @return MarkPriceKlineResponse
========
     * @return MarkPriceKlineAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/MarkPriceKline/Response/MarkPriceKlineAbstractResponse.php
     */
    public function setClose(float $close): self
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