<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces;

interface ISetRiskLimitRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setRiskId(int $riskId): self;
    public function setPositionIdx(int $positionIdx): self;
    public function getSymbol(): string;
    public function getRiskId(): int;
    public function getPositionIdx(): int;
}