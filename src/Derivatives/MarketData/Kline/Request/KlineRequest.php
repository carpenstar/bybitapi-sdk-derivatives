<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Helpers\StringHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface;

class KlineRequest extends AbstractParameters implements IKlineRequestInterface
{
    /**
     * Product type. linear only at now
     * @var string $category
     */
    protected string $category = "linear";

    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W
     * @var string $interval
     */
    protected string $interval;

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
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return KlineRequest
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
     * @return KlineRequest
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
     * @return KlineRequest
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
     * @return KlineRequest
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
     * @return KlineRequest
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