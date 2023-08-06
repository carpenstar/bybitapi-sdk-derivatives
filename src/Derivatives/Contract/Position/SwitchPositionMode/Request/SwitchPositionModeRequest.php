<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces\ISwitchPositionModeRequestInterface;

class SwitchPositionModeRequest extends AbstractParameters implements ISwitchPositionModeRequestInterface
{
    /**
     * Symbol name. Either symbol or coin is required. symbol has a higher priority
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Coin
     * @var string $coin
     */
    protected string $coin;

    /**
     * Position mode. 0: Merged Single. 3: Both Side
     * @var int $positionMode
     */
    protected int $positionMode;

    public function __construct()
    {
        $this
            ->setRequiredBetweenField("symbol", "coin")
            ->setRequiredField("positionMode");
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
     * @return SwitchPositionModeRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoin(): string
    {
        return $this->coin;
    }

    /**
     * @param string $coin
     * @return SwitchPositionModeRequest
     */
    public function setCoin(string $coin): self
    {
        $this->coin = $coin;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionMode(): int
    {
        return $this->positionMode;
    }

    /**
     * @param int $positionMode
     * @return SwitchPositionModeRequest
     */
    public function setPositionMode(int $positionMode): self
    {
        $this->positionMode = $positionMode;
        return $this;
    }


}