# Contract - Position - Get Closed PnL
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Запрос информации о закрытых позициях с данными о прибылях и убытках пользователя.</p>

> Результат сортируется по createdAt в порядке убывания.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setStartTime(int $timestamp): self; // Таймштамп начиная с которого следует получить записи
    public function setEndTime(int $timestamp): self; // Таймштамп до которого следует получить записи
    public function setLimit(int $limit): self; // Лимит записей на запрос
    public function setCursor(string $cursor): self; // Курсор следующей страницы
    
    // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setStartTime(int $timestamp)</td>
     <td>НЕТ</td>
     <td>Нижний предел даты, начиная с которой следует вести записи</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setEndTime(int $timestamp)</td>
     <td>НЕТ</td>
     <td>Верхний предел даты, начиная с которой следует вести учет</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setLimit(int $limit)</td>
     <td>НЕТ</td>
     <td>Лимит записей на запрос</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setCursor(string $cursor)</td>
     <td>НЕТ</td>
     <td>Курсор следующей страницы</td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    public function getSymbol(): string; // Торговая пара
    public function getOrderId(): string; // order ID
    public function getSide(): string; // Направление ордера
    public function getQty(): float; // Обьем ордера
    public function getLeverage(): float; // Кредитное плечо
    public function getOrderPrice(): float; // Цена ордера
    public function getOrderType(): string; // Тип оредра. Market,Limit
    public function getExecType(): string; // Тип исполнения
    public function getClosedSize(): float; // Закрытый размер
    public function getCumEntryValue(): float; // Накопленное значение позиции входа
    public function getAvgEntryPrice(): float; // Средняя цена входа
    public function getCumExitValue(): float; // Накопленное значение позиции выхода
    public function getAvgExitPrice(): float; // Средняя цена выхода
    public function getClosedPnl(): float; // Закрытый PnL
    public function getFillCount(): int; // Количество исполнений в одном ордере
    public function getCreatedAt(): \DateTime; // Время создания
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSide()</td>
     <td>string</td>
     <td>Направление ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getQty()</td>
     <td>float</td>
     <td>Обьем ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getLeverage()</td>
     <td>float</td>
     <td>Кредитное плечо</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Цена ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getExecType()</td>
     <td>string</td>
     <td>Тип исполнения</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedSize()</td>
     <td>float</td>
     <td>Закрытый размер</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> Накопленное значение позиции входа </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> Средняя цена входа </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumExitValue()</td>
     <td>float</td>
     <td> Накопленное значение позиции выхода </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> Средняя цена выхода </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedPnl()</td>
     <td>float</td>
     <td> Закрытый PnL </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getFillCount()</td>
     <td>float</td>
     <td> Количество исполнений в одном ордере </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td>Время создания ордера</td>
   </tr>
</table>

---