<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Dto;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class LeverageFilterItemDto extends ResponseEntity
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
     * @return LeverageFilterItemDto
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
     * @return LeverageFilterItemDto
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