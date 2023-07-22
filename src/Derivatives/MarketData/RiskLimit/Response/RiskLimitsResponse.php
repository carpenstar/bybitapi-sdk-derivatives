<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponse;

class RiskLimitsResponse extends ResponseEntity implements IRiskLimitsResponse
{
    /**
     * Risk id
     * @var string $id
     */
    private string $id;

    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Position limit
     * @var int $limit
     */
    private int $limit;

    /**
     * Maintain margin rate
     * @var float $maintainMargin
     */
    private float $maintainMargin;

    /**
     * Initial margin rate
     * @var float $initialMargin
     */
    private float $initialMargin;

    /**
     * 1: true, 0: false
     * @var int $isLowerRisk
     */
    private int $isLowerRisk = 0;

    /**
     * Allowed max leverage
     * @var float $maxLeverage
     */
    private float $maxLeverage;

    public function __construct(array $data)
    {
        $this
            ->setId($data['id'])
            ->setSymbol($data['symbol'])
            ->setLimit($data['limit'])
            ->setInitialMargin($data['initialMargin'])
            ->setMaintainMargin($data['maintainMargin'])
            ->setMaxLeverage($data['maxLeverage']);

        if(!empty($data['isLowerRisk'])) {
            $this->setIsLowerRisk($data['isLowerRisk']);
        }
    }

    /**
     * @param string $id
     * @return RiskLimitsResponse
     */
    private function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $symbol
     * @return RiskLimitsResponse
     */
    private function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param int $limit
     * @return RiskLimitsResponse
     */
    private function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param float $maintainMargin
     * @return RiskLimitsResponse
     */
    private function setMaintainMargin(float $maintainMargin): self
    {
        $this->maintainMargin = $maintainMargin;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaintainMargin(): float
    {
        return $this->maintainMargin;
    }

    /**
     * @param float $initialMargin
     * @return RiskLimitsResponse
     */
    private function setInitialMargin(float $initialMargin): self
    {
        $this->initialMargin = $initialMargin;
        return $this;
    }

    /**
     * @return float
     */
    public function getInitialMargin(): float
    {
        return $this->initialMargin;
    }

    /**
     * @param null|int $isLowerRisk
     * @return RiskLimitsResponse
     */
    private function setIsLowerRisk(int $isLowerRisk): self
    {
        $this->isLowerRisk = $isLowerRisk;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsLowerRisk(): int
    {
        return $this->isLowerRisk;
    }

    /**
     * @param float $maxLeverage
     * @return RiskLimitsResponse
     */
    public function setMaxLeverage(float $maxLeverage): self
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
}