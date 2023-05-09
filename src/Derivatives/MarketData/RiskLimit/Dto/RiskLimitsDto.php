<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Dto;

use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class RiskLimitsDto extends ResponseEntity
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
     * @return RiskLimitsDto
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
     * @return RiskLimitsDto
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
     * @return RiskLimitsDto
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
     * @return RiskLimitsDto
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
     * @return RiskLimitsDto
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
     * @return RiskLimitsDto
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
     * @return RiskLimitsDto
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