<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;

class GetTradingFeeRateAbstractResponse extends AbstractResponse
{
    /**
     * Symbol name
     * @var string
     */
    private string $symbol;

    /**
     * Taker fee rate
     * @var float $takerFeeRate
     */
    private float $takerFeeRate;

    /**
     * Maker fee rate
     * @var float $makerFeeRate
     */
    private float $makerFeeRate;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setTakerFeeRate($data['takerFeeRate'])
            ->setMakerFeeRate($data['makerFeeRate']);
    }

    /**
     * @param string $symbol
     * @return GetTradingFeeRateAbstractResponse
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
     * @param float $takerFeeRate
     * @return GetTradingFeeRateAbstractResponse
     */
    private function setTakerFeeRate(float $takerFeeRate): self
    {
        $this->takerFeeRate = $takerFeeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTakerFeeRate(): float
    {
        return $this->takerFeeRate;
    }

    /**
     * @param float $makerFeeRate
     * @return GetTradingFeeRateAbstractResponse
     */
    private function setMakerFeeRate(float $makerFeeRate): self
    {
        $this->makerFeeRate = $makerFeeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMakerFeeRate(): float
    {
        return $this->makerFeeRate;
    }

}