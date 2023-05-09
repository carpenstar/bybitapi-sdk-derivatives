<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Dto;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class FundingRateHistoryDto extends ResponseEntity
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
     * @return FundingRateHistoryDto
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
     * @return FundingRateHistoryDto
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
     * @return FundingRateHistoryDto
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