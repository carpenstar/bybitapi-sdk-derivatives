<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;

class OpenInterestRequestOptions extends AbstractParameters
{
    /**
     *
     * @var string $category
     */
    protected string $category = "linear";

    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Interval. 5min 15min 30min 1h 4h 1d
     * @var string $interval
     */
    protected string $interval;

    /**
     * The start timestamp
     * @var \DateTime $startTime
     */
    protected \DateTime $startTime;

    /**
     * The end timestamp
     * @var \DateTime $endTime
     */
    protected \DateTime $endTime;

    /**
     * Limit for data size per page. [1, 200]. Default: 50
     * @var int $limit
     */
    protected int $limit = 50;

    /**
     * Cursor. Used for pagination
     * @var string $cursor
     */
    protected string $cursor;

    public function __construct()
    {
        $this
            ->setRequiredField('symbol')
            ->setRequiredField('interval');
    }

    /**
     * @param string $category
     * @return OpenInterestRequestOptions
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
     * @return OpenInterestRequestOptions
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
     * @return OpenInterestRequestOptions
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
     * @param int $startTime
     * @return OpenInterestRequestOptions
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
     * @return OpenInterestRequestOptions
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
     * @return OpenInterestRequestOptions
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

    /**
     * @param string $cursor
     * @return OpenInterestRequestOptions
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * @return string
     */
    public function getCursor(): string
    {
        return $this->cursor;
    }
}