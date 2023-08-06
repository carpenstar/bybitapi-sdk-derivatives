<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces;

interface IInstrumentInfoRequest
{
    public function getSymbol(): string;
    public function setSymbol(string $symbol): self;
    public function getCategory(): string;
    public function setCategory(string $category): self;
    public function getLimit(): int;
    public function setLimit(int $limit): self;
    public function getCursor(): string;
    public function setCursor(string $cursor): self;
}