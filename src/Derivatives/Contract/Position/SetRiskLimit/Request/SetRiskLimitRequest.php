<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces\ISetRiskLimitRequestInterface;

class SetRiskLimitRequest extends AbstractParameters implements ISetRiskLimitRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Risk limit id
     * @var int $riskId
     */
    protected int $riskId;

    /**
     * Used to identify positions in different position modes. For hedge-mode, this param is required
     * 0: one-way mode
     * 1: hedge-mode Buy side
     * 2: hedge-mode Sell side
     * @var int $positionIdx
     */
    protected int $positionIdx;

    public function __construct()
    {
        $this
            ->setRequiredField('symbol')
            ->setRequiredField('riskId');
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return SetRiskLimitRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getRiskId(): int
    {
        return $this->riskId;
    }

    /**
     * @param int $riskId
     * @return SetRiskLimitRequest
     */
    public function setRiskId(int $riskId): self
    {
        $this->riskId = $riskId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionIdx(): int
    {
        return $this->positionIdx;
    }

    /**
     * @param int $positionIdx
     * @return SetRiskLimitRequest
     */
    public function setPositionIdx(int $positionIdx): self
    {
        $this->positionIdx = $positionIdx;
        return $this;
    }


}