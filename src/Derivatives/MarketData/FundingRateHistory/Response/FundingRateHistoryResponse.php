<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponse;

class FundingRateHistoryResponse extends AbstractResponse implements IFundingRateHistoryResponse
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Funding rate
     * @var float $fundingRate
     */
    private float $fundingRate;

    /**
     * Funding rate timestamp
     * @var \DateTime $fundingRateTimestamp
     */
    private \DateTime $fundingRateTimestamp;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setFundingRate($data['fundingRate'])
            ->setFundingRateTimestamp($data['fundingRateTimestamp']);
    }

    /**
     * @param string $symbol
<<<<<<<< HEAD:src/Derivatives/MarketData/FundingRateHistory/Response/FundingRateHistoryResponse.php
     * @return FundingRateHistoryResponse
========
     * @return FundingRateHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/FundingRateHistory/Response/FundingRateHistoryAbstractResponse.php
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
     * @param float $fundingRate
<<<<<<<< HEAD:src/Derivatives/MarketData/FundingRateHistory/Response/FundingRateHistoryResponse.php
     * @return FundingRateHistoryResponse
========
     * @return FundingRateHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/FundingRateHistory/Response/FundingRateHistoryAbstractResponse.php
     */
    private function setFundingRate(float $fundingRate): self
    {
        $this->fundingRate = $fundingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getFundingRate(): float
    {
        return $this->fundingRate;
    }

    /**
     * @param int $fundingRateTimestamp
<<<<<<<< HEAD:src/Derivatives/MarketData/FundingRateHistory/Response/FundingRateHistoryResponse.php
     * @return FundingRateHistoryResponse
========
     * @return FundingRateHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/FundingRateHistory/Response/FundingRateHistoryAbstractResponse.php
     */
    private function setFundingRateTimestamp(int $fundingRateTimestamp): self
    {
        $this->fundingRateTimestamp = DateTimeHelper::makeFromTimestamp($fundingRateTimestamp);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFundingRateTimestamp(): \DateTime
    {
        return $this->fundingRateTimestamp;
    }


}