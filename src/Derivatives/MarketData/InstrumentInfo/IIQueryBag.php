<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class IIQueryBag extends RequestEntity
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
     * @return IIQueryBag
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
     * @return IIQueryBag
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
     * @return IIQueryBag
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
     * @return IIQueryBag
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
     * @return IIQueryBag
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }
}