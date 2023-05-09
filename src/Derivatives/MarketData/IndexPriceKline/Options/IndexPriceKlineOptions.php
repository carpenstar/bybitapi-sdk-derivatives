<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Options;

use Carpenstar\ByBitAPI\Core\Enums\EnumDerivativesCategory;
use Carpenstar\ByBitAPI\Core\Enums\EnumIntervals;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class IndexPriceKlineOptions extends RequestEntity
{
    /**
     * Product type. linear,inverse. Default: linear, but in the response category shows
     * @var string $category
     */
    protected string $category = EnumDerivativesCategory::CATEGORY_PRODUCT_LINEAR;

    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W
     * @var string $interval
     */
    protected string $interval = EnumIntervals::MINUTE_1;

    /**
     * The start timestamp (ms)
     * @var string $start
     */
    protected string $start;

    /**
     * The end timestamp (ms)
     * @var string $end
     */
    protected string $end;

    /**
     * Limit for data size per page. [1, 200]. Default: 200
     * @var int $limit
     */
    protected int $limit = 200;

    public function __construct()
    {
        $this
            ->setRequiredField('symbol')
            ->setRequiredField('interval')
            ->setRequiredField('start')
            ->setRequiredField('end');
    }

    /**
     * @param string $category
     * @return $this
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
     * @return IndexPriceKlineOptions
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
     * @return IndexPriceKlineOptions
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
     * @return IndexPriceKlineOptions
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
     * @return IndexPriceKlineOptions
     */
    public function setEnd(string $end): self
    {
        $this->end = DateTimeHelper::makeTimestampFromDateString($end);
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
     * @return IndexPriceKlineOptions
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