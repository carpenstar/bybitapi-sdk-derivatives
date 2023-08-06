<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interfaces\ISwitchTpSlModeRequestInterface;

class SwitchTpSlModeRequest extends AbstractParameters implements ISwitchTpSlModeRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Full: set TP/SL to full position. Partial: set TP/SL to partial mode
     * @var string $tpSlMode
     */
    protected string $tpSlMode;

    public function __construct()
    {
        $this
            ->setRequiredField("symbol")
            ->setRequiredField("tpSlMode");
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
     * @return SwitchTpSlModeRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getTpSlMode(): string
    {
        return $this->tpSlMode;
    }

    /**
     * @param string $tpSlMode
     * @return SwitchTpSlModeRequest
     */
    public function setTpSlMode(string $tpSlMode): self
    {
        $this->tpSlMode = $tpSlMode;
        return $this;
    }


}