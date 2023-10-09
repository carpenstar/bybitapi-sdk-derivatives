# Contract - Position - My Position
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-list)</b>
<p>Получение списка открытых позиций пользователя</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setSettleCoin(string $symbol): self; // Расчетная монета
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request\MyPositionRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSymbol(string $symbol)</td>
     <td>НЕТ</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSettleCoin(string $symbol)</td>
     <td>НЕТ</td>
     <td>Расчетный токен</td>
   </tr>
</table>

<p align="center" width="100%"><b>Структура ответа</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
{
     public function getSymbol(): string; // Торговая пара
     public function getSide(): string; // Направление. Buy, Sell. Возврат None, когда нулевое положение одностороннего режима
     public function getSize(): float; // Размер позиции
     public function getEntryPrice(): float; // Цена входа
     public function getLeverage(): float; // Кредитное плечо
     public function getPositionValue(): float; // Значение позиции
     public function getPositionIdx(): int; // Индекс позиции
     public function getRiskId(): int; // ID лимита риска
     public function getRiskLimitValue(): string; // Значение лимита позиции, соответствующее идентификатору риска
     public function getTradeMode(): int; // 0: cross margin mode. 1: isolated margin mode
     public function getAutoAddMargin(): int; // 0: false. 1: true
     public function getPositionBalance(): float; // Маржа позиции
     public function getLiqPrice(): float; // Ориентировочная цена ликвидации. Он возвращает значение только тогда, когда minPrice < liqPrice < maxPrice
     public function getBustPrice(): float; // Ориентировочная цена ликвидации
     public function getTpSlMode(): string; // Depreciated, всегда "Full"
     public function getTakeProfit(): float; // Цена тейк-профита
     public function getStopLoss(): float; // Цена стоп-лосса
     public function getCreatedTime(): \DateTime; // Время создания позиции
     public function getUpdatedTime(): \DateTime; // Время обновления позиции
     public function getTrailingStop(): string; // Трейлинг-стоп
     public function getActivePrice(): float; // Активация цены трейлинг-стопа
     public function getMarkPrice(): float; // Маркировочная цена в реальном времени
     public function getUnrealizedPnl(): float; // нереализованный PNL
     public function getCumRealisedPnl(): float; //совокупный реализованный PNL
     public function getPositionMM(): float; // Маржа поддержания позиции
     public function getPositionIM(): float; // Начальная маржа позиции
     public function getPositionStatus(): string; // Статус позиции
     public function getSessionAvgPrice(): float; // Расчетная цена
     public function getOccClosingFee(): float; // Pre-occupancy closing fee
     public function getAdlRankIndicator(): int; // Auto-deleverage rank indicator.
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSide()</td>
     <td>string</td>
     <td> Side. Buy, Sell. Возврат None, когда нулевое положение одностороннего режима</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSize()</td>
     <td>float</td>
     <td> Размер позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getEntryPrice()</td>
     <td>float</td>
     <td> Цена входа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getLeverage()</td>
     <td>float</td>
     <td> Кредитое плечо </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionValue()</td>
     <td>float</td>
     <td> Значение позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionIdx()</td>
     <td>int</td>
     <td> Индекс позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getRiskId()</td>
     <td>int</td>
     <td> ID риска </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getRiskLimitValue()</td>
     <td>string</td>
     <td> Значение лимита позиции, соответствующее идентификатору риска </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTradeMode()</td>
     <td>int</td>
     <td> 0: cross margin mode. 1: isolated margin mode </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getAutoAddMargin()</td>
     <td>int</td>
     <td> 0: false. 1: true </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionBalance()</td>
     <td>float</td>
     <td> Маржа позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getLiqPrice()</td>
     <td>float</td>
     <td>Ориентировочная цена ликвидации. Он возвращает значение только тогда, когда minPrice < liqPrice < maxPrice</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getBustPrice()</td>
     <td>float</td>
     <td>Ориентировочная цена ликвидации</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTpSlMode()</td>
     <td>string</td>
     <td>всегда "Full" </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTakeProfit()</td>
     <td>float</td>
     <td>Цена тейк-профита</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getStopLoss()</td>
     <td>float</td>
     <td>Цена стоп-лоса</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCreatedTime()</td>
     <td>DateTime</td>
     <td>Время создания позиции</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getUpdatedTime()</td>
     <td>DateTime</td>
     <td>Время обновления позиции</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTrailingStop()</td>
     <td>string</td>
     <td>Трейлинг стоп</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getActivePrice()</td>
     <td>float</td>
     <td>Активация цены трейлинг-стопа</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getMarkPrice()</td>
     <td>float</td>
     <td>Маркировочная цена в реальном времени</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getUnrealisedPnl()</td>
     <td>float</td>
     <td> нереализованный PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCumRealisedPnl()</td>
     <td>float</td>
     <td> совокупный реализованный PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionMM()</td>
     <td>float</td>
     <td> Поддерживающая маржа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionIM()</td>
     <td>float</td>
     <td> Начальная маржа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionStatus()</td>
     <td>string</td>
     <td> Статус позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSessionAvgPrice()</td>
     <td>float</td>
     <td> Расчетная цена </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getOccClosingFee()</td>
     <td>float</td>
     <td> Pre-occupancy closing fee </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getAdlRankIndicator()</td>
     <td>string</td>
     <td> Auto-deleverage rank indicator </td>
   </tr>
</table>

---