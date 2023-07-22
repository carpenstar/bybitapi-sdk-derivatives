<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILeverageFilterItem;

<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/LeverageFilterItemResponse.php
class LeverageFilterItemResponse extends ResponseEntity implements  ILeverageFilterItem
========
class LeverageFilterItemAbstractResponse extends AbstractResponse implements  ILeverageFilterItem
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/LeverageFilterItemAbstractResponse.php
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
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/LeverageFilterItemResponse.php
     * @return LeverageFilterItemResponse
========
     * @return LeverageFilterItemAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/LeverageFilterItemAbstractResponse.php
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
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/LeverageFilterItemResponse.php
     * @return LeverageFilterItemResponse
========
     * @return LeverageFilterItemAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/LeverageFilterItemAbstractResponse.php
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