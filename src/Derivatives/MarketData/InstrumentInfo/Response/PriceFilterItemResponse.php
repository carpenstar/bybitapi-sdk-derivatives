<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IPriceFilterItem;

class PriceFilterItemResponse extends ResponseEntity implements IPriceFilterItem
{
    /**
     * Min. order price
     * @var float $minPrice
     */
    private float $minPrice;

    /**
     * Max. order price
     * @var float $maxPrice
     */
    private float $maxPrice;

    /**
     * Tick size
     * @var float $tickSize
     */
    private float $tickSize;

    public function __construct(array $data)
    {
        $this
            ->setMinPrice($data['minPrice'])
            ->setMaxPrice($data['maxPrice'])
            ->setTickSize($data['tickSize']);
    }

    /**
     * @param float $minPrice
     * @return PriceFilterItemResponse
     */
    private function setMinPrice(float $minPrice): self
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinPrice(): float
    {
        return $this->minPrice;
    }

    /**
     * @param float $maxPrice
     * @return PriceFilterItemResponse
     */
    private function setMaxPrice(float $maxPrice): self
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxPrice(): float
    {
        return $this->maxPrice;
    }

    /**
     * @param float $tickSize
     * @return PriceFilterItemResponse
     */
    private function setTickSize(float $tickSize): self
    {
        $this->tickSize = $tickSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getTickSize(): float
    {
        return $this->tickSize;
    }
}