<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo;

use Carpenstar\ByBitAPI\Core\Enums\EnumDerivativesCategory;
use Carpenstar\ByBitAPI\Core\Objects\RequestEntity;

class TIQueryBag extends RequestEntity
{
    private string $category = 'linear';

    private string $symbol;

    public function setCategory(string $category): self
    {
        if ($category == EnumDerivativesCategory::CATEGORY_PRODUCT_OPTION) {
            $this->setRequiredField('symbol');
        }
        $this->setRequiredField('category');
        $this->category = $category;
        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return TIQueryBag
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