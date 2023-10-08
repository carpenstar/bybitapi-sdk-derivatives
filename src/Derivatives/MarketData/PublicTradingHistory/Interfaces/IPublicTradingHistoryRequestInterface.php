<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces;

interface IPublicTradingHistoryRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}