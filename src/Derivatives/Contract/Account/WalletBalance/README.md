# Contract - Account - Wallet Balance
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/wallet)</b>
<p>Endpoint returns the derivatives wallet balance, information about assets in each currency, and information about the risk level of the account. <br />
By default, currency information with assets or liabilities equal to 0 is not returned.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance::class 
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Request\WalletBalanceRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponse;

$bybit = new BybitAPI('https://api-testnet.bybit.com',"apiKey", "secret");

$walletBalance = $bybit->rest(WalletBalance::class, (new WalletBalanceRequest()))->getBody()->all();
$walletBalance = array_slice($walletBalance, 0, 2);



/** @var WalletBalanceResponse $feeRate */
foreach ($walletBalance as $feeRate) {
    echo "Coin: {$feeRate->getCoin()}" . PHP_EOL;
    echo "Equity: {$feeRate->getEquity()}" . PHP_EOL;
    echo "Wallet Balance: {$feeRate->getWalletBalance()}" . PHP_EOL;
    echo "Position Margin: {$feeRate->getPositionMargin()}" . PHP_EOL;
    echo "Available Balance: {$feeRate->getAvailableBalance()}" . PHP_EOL;
    echo "Order Margin: {$feeRate->getOrderMargin()}" . PHP_EOL;
    echo "Occ Closing Fee: {$feeRate->getOccClosingFee()}" . PHP_EOL;
    echo "Occ Funding Fee: {$feeRate->getOccFundingFee()}" . PHP_EOL;
    echo "Unrealised PnL: {$feeRate->getUnrealisedPnl()}" . PHP_EOL;
    echo "Cumulative Realised PnL: {$feeRate->getCumRealisedPnl()}" . PHP_EOL;
    echo "Given Cash: {$feeRate->getGivenCash()}" . PHP_EOL;
    echo "Service Cash: {$feeRate->getServiceCash()}" . PHP_EOL;
    echo "Account IM: {$feeRate->getAccountIM()}" . PHP_EOL;
    echo "Account MM: {$feeRate->getAccountMM()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 * 
 * Coin: BTC
 * Equity: 0.2
 * Wallet Balance: 0.2
 * Position Margin: 0
 * Available Balance: 0.2
 * Order Margin: 0
 * Occ Closing Fee: 0
 * Occ Funding Fee: 0
 * Unrealised PnL: 0
 * Cumulative Realised PnL: 0
 * Given Cash: 0
 * Service Cash: 0
 * Account IM:
 * Account MM:
 * -----
 * Coin: ETH
 * Equity: 0
 * Wallet Balance: 0
 * Position Margin: 0
 * Available Balance: 0
 * Order Margin: 0
 * Occ Closing Fee: 0
 * Occ Funding Fee: 0
 * Unrealised PnL: 0
 * Cumulative Realised PnL: 0
 * Given Cash: 0
 * Service Cash: 0
 * Account IM
 * Account MM
 * -----
 */
```
<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;

interface IWalletBalanceResponseInterface
{
    public function getCoin(): string; // Coin
    public function getEquity(): float; // Total capital
    public function getWalletBalance(): float; // Wallet balance
    public function getPositionMargin(): float; // Position Margin
    public function getAvailableBalance(): float; // Available balance
    public function getOrderMargin(): float; // Pre-occupied margin
    public function getOccClosingFee(): float; // The fee for closing a position has been charged.
    public function getOccFundingFee(): float; // Pre-financing fee
    public function getUnrealisedPnl(): float; // Unrealized PnL
    public function getCumRealisedPnl(): float; // Cumulative realized PnL (all time)
    public function getGivenCash(): float;
    public function getServiceCash(): float;
    public function getAccountIM(): string; // USDC Account Initial Margin
    public function getAccountMM(): string; // USDC Account Maintenance Margin
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getCoin()</td>
    <td>string</td>
    <td>Coin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getEquity()</td>
    <td>float</td>
    <td>Total capital</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getWalletBalance()</td>
    <td>float</td>
    <td>Wallet balance</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getPositionMargin()</td>
    <td>float</td>
    <td>Position Margin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAvailableBalance()</td>
    <td>float</td>
    <td>Available balance</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOrderMargin()</td>
    <td>float</td>
    <td>Pre-occupied margin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOccClosingFee()</td>
    <td>float</td>
    <td>
      The fee for closing a position has been charged. <br />
      Formula: opening fee + expected maximum closing fee
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOccFundingFee()</td>
    <td>float</td>
    <td>
      Pre-financing fee
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getUnrealisedPnl()</td>
    <td>float</td>
    <td>
      Unrealized PnL
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getCumRealisedPnl()</td>
    <td>float</td>
    <td>
      Cumulative realized PnL (all time)
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getGivenCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getServiceCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAccountIM()</td>
    <td>string</td>
    <td>
      USDC Account Initial Margin
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAccountMM()</td>
    <td>string</td>
    <td>
      USDC Account Maintenance Margin
    </td>
  </tr>
</table>