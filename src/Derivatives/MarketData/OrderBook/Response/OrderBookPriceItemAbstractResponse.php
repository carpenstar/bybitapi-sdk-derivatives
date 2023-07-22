<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;

<<<<<<<< HEAD:src/Derivatives/MarketData/OrderBook/Response/OrderBookPriceItemResponse.php
class OrderBookPriceItemResponse extends ResponseEntity
========
class OrderBookPriceItemAbstractResponse extends AbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/OrderBook/Response/OrderBookPriceItemAbstractResponse.php
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