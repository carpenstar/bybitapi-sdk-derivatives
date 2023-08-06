<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interfaces;

interface ISwitchTpSlModeRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setTpSlMode(string $tpSlMode): self;
    public function getSymbol(): string;
    public function getTpSlMode(): string;
}