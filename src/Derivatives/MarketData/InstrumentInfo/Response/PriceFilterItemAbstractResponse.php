<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IPriceFilterItem;

<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/PriceFilterItemResponse.php
class PriceFilterItemResponse extends ResponseEntity implements IPriceFilterItem
========
class PriceFilterItemAbstractResponse extends AbstractResponse implements IPriceFilterItem
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/PriceFilterItemAbstractResponse.php
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
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/PriceFilterItemResponse.php
     * @return PriceFilterItemResponse
========
     * @return PriceFilterItemAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/PriceFilterItemAbstractResponse.php
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
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/PriceFilterItemResponse.php
     * @return PriceFilterItemResponse
========
     * @return PriceFilterItemAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/PriceFilterItemAbstractResponse.php
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
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/PriceFilterItemResponse.php
     * @return PriceFilterItemResponse
========
     * @return PriceFilterItemAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/PriceFilterItemAbstractResponse.php
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