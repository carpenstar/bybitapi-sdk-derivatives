<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Options;

use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class TickerInfoOptions extends RequestEntity
{
    /**
     * Only linear category support at now
     * @var string $category
     */
    protected string $category = 'linear';

    protected string $symbol;

    public function __construct()
    {
        $this->setRequiredField('symbol');
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return TickerInfoOptions
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
}