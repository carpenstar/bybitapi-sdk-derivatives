<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request;

use Carpenstar\ByBitAPI\Core\Objects\OptionsEntity;

class GetTradingFeeRateRequestOptions extends OptionsEntity
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