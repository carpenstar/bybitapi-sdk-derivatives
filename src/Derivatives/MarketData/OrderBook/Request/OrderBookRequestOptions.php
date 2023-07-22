<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request;

use Carpenstar\ByBitAPI\Core\Objects\OptionsEntity;

class OrderBookRequestOptions extends OptionsEntity
{
    /**
     * @var string $category
     */
    protected string $category = "linear";

    /**
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * @var int $limit
     */
    protected int $limit = 25;

    public function __construct()
    {
        $this->setRequiredField("symbol");
    }

    /**
     * @param string $category
     * @return OrderBookRequestOptions
     */
    public function setCategory(string $category): self
    {
        $this->category = "linear"; // only linear support, now
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
     * @return OrderBookRequestOptions
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
     * @return OrderBookRequestOptions
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