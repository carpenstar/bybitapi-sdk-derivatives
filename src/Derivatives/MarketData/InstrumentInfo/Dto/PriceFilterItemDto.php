<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Dto;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class PriceFilterItemDto extends ResponseEntity
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
     * @return PriceFilterItemDto
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
     * @return PriceFilterItemDto
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
     * @return PriceFilterItemDto
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