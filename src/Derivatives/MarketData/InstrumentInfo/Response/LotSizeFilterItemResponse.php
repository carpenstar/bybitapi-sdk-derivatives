<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILotSizeFilterItem;

class LotSizeFilterItemResponse extends AbstractResponse implements ILotSizeFilterItem
{
    private float $maxOrderQty;

    private float $minOrderQty;

    private float $qtyStep;

    public function __construct(array $data)
    {
       $this
           ->setMaxOrderQty($data['maxOrderQty'])
           ->setMinOrderQty($data['minOrderQty'])
           ->setQtyStep($data['qtyStep']);
    }

    /**
     * @param float $maxOrderQty
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/LotSizeFilterItemResponse.php
     * @return LotSizeFilterItemResponse
========
     * @return LotSizeFilterItemAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/LotSizeFilterItemAbstractResponse.php
     */
    private function setMaxOrderQty(float $maxOrderQty): self
    {
        $this->maxOrderQty = $maxOrderQty;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxOrderQty(): float
    {
        return $this->maxOrderQty;
    }

    /**
     * @param float $minOrderQty
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/LotSizeFilterItemResponse.php
     * @return LotSizeFilterItemResponse
========
     * @return LotSizeFilterItemAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/LotSizeFilterItemAbstractResponse.php
     */
    private function setMinOrderQty(float $minOrderQty): self
    {
        $this->minOrderQty = $minOrderQty;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinOrderQty(): float
    {
        return $this->minOrderQty;
    }

    /**
     * @return float
     */
    public function getQtyStep(): float
    {
        return $this->qtyStep;
    }

    /**
     * @param float $qtyStep
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/LotSizeFilterItemResponse.php
     * @return LotSizeFilterItemResponse
========
     * @return LotSizeFilterItemAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/LotSizeFilterItemAbstractResponse.php
     */
    private function setQtyStep(float $qtyStep): self
    {
        $this->qtyStep = $qtyStep;
        return $this;
    }
}