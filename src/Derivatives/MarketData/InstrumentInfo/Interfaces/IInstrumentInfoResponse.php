<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;

interface IInstrumentInfoResponse
{
    public function getSymbol(): ?string;
    public function getSettleCoin(): ?string;
    public function getFundingInterval(): int;
    public function getUnifiedMarginTrade(): bool;
    public function getPriceScale(): float;
    public function getDeliveryFeeRate(): float;
    public function getDeliveryTime(): ?\DateTime;
    public function getLaunchTime(): ?\DateTime;
    public function getQuoteCoin(): ?string;
    public function getBaseCoin(): ?string;
    public function getContractType(): ?string;
    public function getStatus(): ?string;
    public function getLotSizeFilter(): EntityCollection;
    public function getPriceFilter(): EntityCollection;
    public function getLeverageFilter(): EntityCollection;
}