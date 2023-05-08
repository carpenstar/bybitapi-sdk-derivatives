<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Options;

use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class InstrumentInfoOptions extends RequestEntity
{
    /**
     * Product type. linear,inverse,option. Default: returns futures
     * @var string $category
     */
    protected string $category;

    /**
     * Symbol name. query an option symbol, category is required
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Base coin.
     * Valid when category=option
     * BTC by default if not passed
     * @var string $baseCoin
     */
    protected string $baseCoin;

    /**
     * Limit for data size per page. [1, 1000]. Default: 500
     * @var int $limit
     */
    protected int $limit = 500;

    /**
     * Cursor. Used for pagination
     * @var string $cursor
     */
    protected string $cursor;

    public function __construct()
    {
        if (isset($this->symbol) && !empty($this->symbol)) {
            $this->setRequiredField('category');
        }
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return InstrumentInfoOptions
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
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
     * @param string $category
     * @return InstrumentInfoOptions
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCoin(): string
    {
        return $this->baseCoin;
    }

    /**
     * @param string $baseCoin
     * @return InstrumentInfoOptions
     */
    public function setBaseCoin(string $baseCoin): self
    {
        $this->baseCoin = $baseCoin;
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
     * @param int $limit
     * @return InstrumentInfoOptions
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCursor(): string
    {
        return $this->cursor;
    }

    /**
     * @param string $cursor
     * @return InstrumentInfoOptions
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }
}