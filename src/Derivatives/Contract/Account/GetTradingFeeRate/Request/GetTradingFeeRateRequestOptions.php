<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;

class GetTradingFeeRateRequestOptions extends AbstractParameters
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
     * @return GetTradingFeeRateRequestOptions
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }
}