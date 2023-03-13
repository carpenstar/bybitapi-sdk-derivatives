<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Options;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class FundingRateHistoryOptions extends RequestEntity
{
    /**
     * Product type. linear
     * @var string $category
     */
    protected string $category = "linear";

    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * The start timestamp
     * @var \DateTime $start
     */
    protected \DateTime $start;

    /**
     * The end timestamp
     * @var \DateTime $end
     */
    protected \DateTime $end;

    /**
     * Limit for data size per page. [1, 200]. Default: 200
     * @var int $limit
     */
    protected int $limit = 200;

    public function __construct()
    {
        $this->setSymbol('symbol');
    }

    /**
     * @param string $category
     * @return FundingRateHistoryOptions
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
     * @return FundingRateHistoryOptions
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
     * @param int $start
     * @return FundingRateHistoryOptions
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
     * @param int $end
     * @return FundingRateHistoryOptions
     */
    public function setEnd(int $end): self
    {
        $this->end = DateTimeHelper::makeFromTimestamp($end);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd(): \DateTime
    {
        return $this->end;
    }

    /**
     * @param int $limit
     * @return FundingRateHistoryOptions
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