### Contract - Account - Wallet Balance
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/wallet)</b>
<p>Эндпоинт возвращает баланс деривативного кошелька, информацию об активах в каждой валюте и информацию о уровне риска счета. <br />
По умолчанию информация о валюте с активами или обязательствами, равными 0, не возвращается.</p>

```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance::class
```
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
<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;

interface IWalletBalanceResponseInterface
{
    public function getCoin(): string;
    public function getEquity(): float;
    public function getWalletBalance(): float;
    public function getPositionMargin(): float;
    public function getAvailableBalance(): float;
    public function getOrderMargin(): float;
    public function getOccClosingFee(): float;
    public function getOccFundingFee(): float;
    public function getUnrealisedPnl(): float;
    public function getCumRealisedPnl(): float;
    public function getGivenCash(): float;
    public function getServiceCash(): float;
    public function getAccountIM(): string;
    public function getAccountMM(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getCoin()</td>
    <td>string</td>
    <td>Токен</td>
  </tr>
  <tr>
    <td>:: getEquity()</td>
    <td>float</td>
    <td>Общий капитал</td>
  </tr>
  <tr>
    <td>:: getWalletBalance()</td>
    <td>float</td>
    <td>Баланс кошелька</td>
  </tr>
  <tr>
    <td>:: getPositionMargin()</td>
    <td>float</td>
    <td>Маржа позиции</td>
  </tr>
  <tr>
    <td>:: getAvailableBalance()</td>
    <td>float</td>
    <td>Доступный баланс</td>
  </tr>
  <tr>
    <td>:: getOrderMargin()</td>
    <td>float</td>
    <td>Предварительно занятая маржа</td>
  </tr>
  <tr>
    <td>:: getOccClosingFee()</td>
    <td>float</td>
    <td>
      Занята плата за закрытие позиции. <br />
      Формула: плата за открытие + ожидаемая максимальная плата за закрытие
    </td>
  </tr>
  <tr>
    <td>:: getOccFundingFee()</td>
    <td>float</td>
    <td>
      Плата за предварительное финансирование
    </td>
  </tr>
  <tr>
    <td>:: getUnrealisedPnl()</td>
    <td>float</td>
    <td>
      Нереализованный PnL
    </td>
  </tr>
  <tr>
    <td>:: getCumRealisedPnl()</td>
    <td>float</td>
    <td>
      Совокупный реализованный PnL (за все время)
    </td>
  </tr>
  <tr>
    <td>:: getGivenCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getServiceCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getAccountIM()</td>
    <td>string</td>
    <td>
      Начальная маржа счета USDC
    </td>
  </tr>
  <tr>
    <td>:: getAccountMM()</td>
    <td>string</td>
    <td>
      Маржа обслуживания счета USDC
    </td>
  </tr>
</table>