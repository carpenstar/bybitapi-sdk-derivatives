<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Options;

use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class PublicTradingHistoryOptions extends RequestEntity
{
    /**
     * Product type.linear
     * @var string $category
     */
    protected string $category = "linear"; // At current time, support linear type only

    /**
     * Symbol name
     * @var string
     */
    protected string $symbol;

    /**
     * Limit for data size per page. [1, 1000]. Default: 500
     * @var int $limit
     */
    protected int $limit = 500;

    public function __construct()
    {
        $this->setRequiredField('symbol');
    }

    /**
     * @param string $category
     * @return PublicTradingHistoryOptions
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
     * @return PublicTradingHistoryOptions
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
     * @param int $limit
     * @return PublicTradingHistoryOptions
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