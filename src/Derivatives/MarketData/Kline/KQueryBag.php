<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class KQueryBag extends RequestEntity
{
    /**
     * Product type. linear,inverse. Default: linear
     * @var string $category
     */
    private string $category;

    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W
     * @var string $interval
     */
    private string $interval;

    /**
     * The start timestamp (ms)
     * @var string $start
     */
    private string $start;

    /**
     * The end timestamp (ms)
     * @var string $end
     */
    private string $end;

    /**
     * Limit for data size per page. [1, 200]. Default: 200
     * @var int $limit
     */
    private int $limit = 200;

    public function __construct()
    {
        $this
            ->setRequiredField('category')
            ->setRequiredField('symbol')
            ->setRequiredField('interval');
    }

    /**
     * @param string $category
     * @return KQueryBag
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
     * @return KQueryBag
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
     * @param string $interval
     * @return KQueryBag
     */
    public function setInterval(string $interval): self
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return string
     */
    public function getInterval(): string
    {
        return $this->interval;
    }

    /**
     * @param string $start
     * @return KQueryBag
     */
    public function setStart(string $start): self
    {
        $this->start = DateTimeHelper::makeTimestampFromDateString($start);
        return $this;
    }

    /**
     * @return string
     */
    public function getStart(): string
    {
        return $this->start;
    }

    /**
     * @param string $end
     * @return KQueryBag
     */
    public function setEnd(string $end): self
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnd(): string
    {
        return $this->end;
    }

    /**
     * @param int $limit
     * @return KQueryBag
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
}