<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILeverageFilterItem;

class LeverageFilterItemResponse extends ResponseEntity implements  ILeverageFilterItem
{
    /**
     * Min. leverage
     * @var int $minLeverage
     */
    private int $minLeverage;

    /**
     * Max. leverage
     * @var float $maxLeverage
     */
    private float $maxLeverage;

    /**
     * The min step to modify leverage
     * @var float $leverageStep
     */
    private float $leverageStep;

    public function __construct(array $data)
    {
        $this
            ->setMinLeverage($data['minLeverage'])
            ->setMaxLeverage($data['maxLeverage'])
            ->setLeverageStep($data['leverageStep']);
    }

    /**
     * Min. leverage
     * @param int $minLeverage
     * @return $this
     */
    private function setMinLeverage(int $minLeverage): self
    {
        $this->minLeverage = $minLeverage;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinLeverage(): int
    {
        return $this->minLeverage;
    }

    /**
     * @param float $maxLeverage
     * @return LeverageFilterItemResponse
     */
    private function setMaxLeverage(float $maxLeverage): self
    {
        $this->maxLeverage = $maxLeverage;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxLeverage(): float
    {
        return $this->maxLeverage;
    }

    /**
     * @param float $leverageStep
     * @return LeverageFilterItemResponse
     */
    private function setLeverageStep(float $leverageStep): self
    {
        $this->leverageStep = $leverageStep;
        return $this;
    }

    /**
     * @return float
     */
    public function getLeverageStep(): float
    {
        return $this->leverageStep;
    }
}