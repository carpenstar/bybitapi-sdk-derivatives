### Contract - Contract - Position - Get Closed PnL
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Запрос информации о закрытых позициях с данными о прибылях и убытках пользователя.</p>

> Результат сортируется по createdAt в порядке убывания.

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setStartTime(int $startTime): self;
    public function setEndTime(int $endTime): self;
    public function setLimit(int $limit): self;
    public function setCursor(string $cursor): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setStartTime(int $startTime)</td>
    <td>НЕТ</td>
    <td>Нижняя граница даты от которой брать записи</td>
  </tr>
  <tr>
    <td>:: setEndTime(int $endTime)</td>
    <td>НЕТ</td>
    <td>Верхняя граница даты от которой брать записи</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit)</td>
    <td>НЕТ</td>
    <td>Лимит записей на запрос</td>
  </tr>
  <tr>
    <td>:: setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getSide(): string;
    public function getQty(): float;
    public function getLeverage(): float;
    public function getOrderPrice(): float;
    public function getOrderType(): string;
    public function getExecType(): string;
    public function getClosedSize(): float;
    public function getCumEntryValue(): float;
    public function getAvgEntryPrice(): float;
    public function getCumExitValue(): float;
    public function getAvgExitPrice(): float;
    public function getClosedPnl(): float;
    public function getFillCount(): int;
    public function getCreatedAt(): \DateTime;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>Направление ордера</td>
  </tr>
  <tr>
    <td>:: getQty()</td>
    <td>float</td>
    <td>Обьем ордера</td>
  </tr>
  <tr>
    <td>:: getLeverage()</td>
    <td>float</td>
    <td>Кредитное плечо</td>
  </tr>
  <tr>
    <td>:: getOrderPrice()</td>
    <td>float</td>
    <td>Цена ордера</td>
  </tr>
  <tr>
    <td>:: getExecType()</td>
    <td>string</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getClosedSize()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCumEntryValue()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getAvgEntryPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCumExitValue()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getAvgExitPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getClosedPnl()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getFillCount()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCreatedAt()</td>
    <td>DateTime</td>
    <td> - </td>
  </tr>
</table>