<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setSettleCoin(string $symbol): self;
    public function getSymbol(): string;
    public function getSettleCoin(): string;
}