<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request;

use Carpenstar\ByBitAPI\Core\Enums\DerivativesCategoryEnum;
use Carpenstar\ByBitAPI\Core\Enums\EnumDerivativesCategory;
use Carpenstar\ByBitAPI\Core\Enums\EnumIntervals;
use Carpenstar\ByBitAPI\Core\Enums\IntervalEnum;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Helpers\StringHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineRequest;

class IndexPriceKlineRequest extends AbstractParameters implements IIndexPriceKlineRequest
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
    protected string $interval = EnumIntervals::MINUTE1;

    /**
     * The start timestamp (ms)
     * @var \DateTime $startTime
     */
    protected \DateTime $startTime;

    /**
     * The end timestamp (ms)
     * @var \DateTime $endTime
     */
    protected \DateTime $endTime;

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
            ->setRequiredField('startTime')
            ->setRequiredField('endTime');
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
     * @return IndexPriceKlineRequest
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
     * @return IndexPriceKlineRequest
     */
    public function setInterval(string $interval): self
    {
        $this->interval = StringHelper::clearInterval($interval);
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
     * @param int $startTime
     * @return IndexPriceKlineRequest
     */
    public function setStartTime(int $startTime): self
    {
        $this->startTime = DateTimeHelper::makeFromTimestamp($startTime);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->startTime;
    }

    /**
     * @param int $endTime
     * @return IndexPriceKlineRequest
     */
    public function setEndTime(int $endTime): self
    {
        $this->endTime = DateTimeHelper::makeFromTimestamp($endTime);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime(): \DateTime
    {
        return $this->endTime;
    }

    /**
     * @param int $limit
     * @return IndexPriceKlineRequest
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