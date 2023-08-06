<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces;

interface IWalletBalanceResponseInterface
{
    public function getCoin(): string;
    public function getEquity(): float;
    public function getWalletBalance(): float;
    public function getPositionMargin(): float;
    public function getAvailableBalance(): float;
    public function getOrderMargin(): float;
    public function getOccClosingFee(): float;
    public function getOccFundingFee(): float;
    public function getUnrealisedPnl(): float;
    public function getCumRealisedPnl(): float;
    public function getGivenCash(): float;
    public function getServiceCash(): float;
    public function getAccountIM(): string;
    public function getAccountMM(): string;
}