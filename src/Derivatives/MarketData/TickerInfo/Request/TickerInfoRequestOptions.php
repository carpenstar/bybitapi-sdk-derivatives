<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;

class TickerInfoRequestOptions extends AbstractParameters
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
     * @return TickerInfoRequestOptions
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