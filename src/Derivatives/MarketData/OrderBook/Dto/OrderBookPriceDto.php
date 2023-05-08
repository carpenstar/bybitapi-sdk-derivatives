<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Dto;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class OrderBookPriceDto extends ResponseEntity
{
    /**
     * @var float $price
     */
    private float $price;

    /**
     * @var float $quantity
     */
    private float $quantity;

    public function __construct(array $data)
    {

        $this
            ->setPrice($data[0])
            ->setQuantity($data[1]);
    }

    /**
     * @param float $price
     * @return self
     */
    private function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $quantity
     * @return self
     */
    private function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
}