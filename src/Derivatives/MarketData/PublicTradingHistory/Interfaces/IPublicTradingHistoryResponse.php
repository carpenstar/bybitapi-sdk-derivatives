<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces;

interface IPublicTradingHistoryResponse
{
    public function getExecId(): string;
    public function getSymbol(): string;
    public function getPrice(): float;
    public function getSize(): float;
    public function getSide(): string;
    public function getTime(): \DateTime;
    public function isBlockTrade(): bool;
}