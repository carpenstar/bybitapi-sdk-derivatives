<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Request;

use Carpenstar\ByBitAPI\Core\Objects\OptionsEntity;

class WalletBalanceRequestOptions extends OptionsEntity
{
    protected string $coin;

    public function setCoin(string $symbol): self
    {
        $this->coin = $symbol;
        return $this;
    }

    public function getCoin(): string
    {
        return $this->coin;
    }
}