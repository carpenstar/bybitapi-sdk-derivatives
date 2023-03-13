<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Options;

use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class RiskLimitsOptions extends RequestEntity
{
    /**
     * Product type. linear
     * Only linear support, now
     * @var string $category
     */
    protected string $category = "linear";

    protected string $symbol;

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
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
}