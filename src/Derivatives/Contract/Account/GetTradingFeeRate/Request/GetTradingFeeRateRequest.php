<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;

class GetTradingFeeRateRequest extends AbstractParameters
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return GetTradingFeeRateRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }
}