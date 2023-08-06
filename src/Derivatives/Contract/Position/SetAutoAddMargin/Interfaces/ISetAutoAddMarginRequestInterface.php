<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setSide(string $side): self;
    public function setAutoAddMargin(int $autoAddMargin): self;
    public function setPositionIdx(int $positionIdx): self;
    public function getSymbol(): string;
    public function getSide(): string;
    public function getAutoAddMargin(): int;
    public function getPositionIdx(): int;
}