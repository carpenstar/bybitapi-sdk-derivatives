<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setCoin(string $coin): self;
    public function setPositionMode(int $positionMode): self;
    public function getSymbol(): string;
    public function getCoin(): string;
    public function getPositionMode(): int;
}