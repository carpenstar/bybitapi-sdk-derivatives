# Contract - Account - Wallet Balance
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/wallet)</b>
<p>Эндпоинт возвращает баланс деривативного кошелька, информацию об активах в каждой валюте и информацию о уровне риска счета. <br />
По умолчанию информация о валюте с активами или обязательствами, равными 0, не возвращается.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance::class 
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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
<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;

interface IWalletBalanceResponseInterface
{
    public function getCoin(): string; // Токен
    public function getEquity(): float; // Общий капитал
    public function getWalletBalance(): float; // Баланс кошелька
    public function getPositionMargin(): float; // Маржа позиции
    public function getAvailableBalance(): float; // Доступный баланс
    public function getOrderMargin(): float; // Предварительно занятая маржа
    public function getOccClosingFee(): float; // Комиссия за закрытие позиции.
    public function getOccFundingFee(): float; // Комиссия за предварительное финансирование
    public function getUnrealisedPnl(): float; // Нереализованный прибыль и убыток
    public function getCumRealisedPnl(): float; // Совокупный реализованный PnL (за все время)
    public function getGivenCash(): float;
    public function getServiceCash(): float;
    public function getAccountIM(): string; // USDC начальная маржа
    public function getAccountMM(): string; // USDC поддерживающая маржа
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getCoin()</td>
    <td>string</td>
    <td>Токен</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getEquity()</td>
    <td>float</td>
    <td> Общий капитал</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getWalletBalance()</td>
    <td>float</td>
    <td>Баланс кошелька</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getPositionMargin()</td>
    <td>float</td>
    <td>Маржа позиции</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAvailableBalance()</td>
    <td>float</td>
    <td>Доступный баланс</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOrderMargin()</td>
    <td>float</td>
    <td>Предварительно занятая маржа</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOccClosingFee()</td>
    <td>float</td>
    <td>
        Комиссия за закрытие позиции. <br />
        Формула: комиссия за открытие + ожидаемая максимальная комиссия за закрытие.
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOccFundingFee()</td>
    <td>float</td>
    <td>
      Комиссия за предварительное финансирование
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getUnrealisedPnl()</td>
    <td>float</td>
    <td>
      Нереализованный прибыль и убыток
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getCumRealisedPnl()</td>
    <td>float</td>
    <td>
      Совокупный реализованный PnL (за все время)
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
      USDC начальная маржа
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAccountMM()</td>
    <td>string</td>
    <td>
      USDC поддерживающая маржа
    </td>
  </tr>
</table>

---