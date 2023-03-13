<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Dto;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILotSizeFilterItem;

class LotSizeFilterItemDto extends ResponseEntity implements ILotSizeFilterItem
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
     * @return LotSizeFilterItemDto
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
     * @return LotSizeFilterItemDto
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
     * @return LotSizeFilterItemDto
     */
    private function setQtyStep(float $qtyStep): self
    {
        $this->qtyStep = $qtyStep;
        return $this;
    }
}