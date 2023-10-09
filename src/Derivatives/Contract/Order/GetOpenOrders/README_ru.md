# Contract - Contract - Order - Get Open Orders
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/open-order)</b>
<p>Эндпоинт возвращает данные об открытых или частично исполненных заказов в режиме реального времени.</p>

> Если не переданы ни orderId, ни orderLinkId, будет возвращено не более 500 открытых или частично исполненных ордеров.
> Записи сортируются по времени создания от самых новых к самым старым.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setBaseCoin(string $baseCoin): self; // Базовый токен
    public function setSettleCoin(string $settleCoin): self; // Расчетный токен
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Пользовательский ID ордера
    public function setOrderFilter(string $orderFilter): self; // Возможные значения: Order: активный ордер, StopOrder: условный ордер.
    public function setCursor(string $cursor): self; // Курсор следующей страницы
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td>Базовый токен</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Расчетный токен</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: Order: активный ордер, StopOrder: условный ордер.</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    public function getSymbol(): string; // Торговая пара
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
    public function getSide(): string; // Направление. Buy,Sell
    public function getOrderType(): string; // Тип ордера. Market, Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    public function getPrice(): float; // Цена оредра
    public function getQty(): float; // Количество ордера
    public function getTimeInForce(): string; // Time in force
    public function getOrderStatus(): string; // Статус ордера
    public function getLastPriceOnCreated(): string; // Последняя цена когда был создан ордер
    public function getCreatedTime(): \DateTime; // Время создания ордера
    public function getUpdatedTime(): \DateTime; // Время обновления ордера
    public function getCancelType(): string; // Тип отмены
    public function getStopOrderType(): string; // Тип завершения ордера
    public function getTriggerDirection(): int; // 1: Рост, 2: Снижение
    public function getTriggerBy(): string; // Тип триггерной цены
    public function getTriggerPrice(): ?float; // Цена триггера
    public function getCumExecValue(): float; //  Суммарное значение исполненной позиции
    public function getCumExecFee(): float; // Совокупная торговая комиссия
    public function getCumExecQty(): float; // Совокупное выполненное количество
    public function getLeavesValue(): float; // Оставшаяся стоимость ожидает обмена
    public function getLeavesQty(): float; // Оставшееся количество ожидает продажи
    public function getTakeProfit(): float; // Цена тейк-профита
    public function getStopLoss(): float; // Цена стоп-лосса
    public function getTpslMode(): string; // TP/SL mode, Полный: вся позиция по TP/SL. Частичное: частичное положение TP/SL
    public function getTpLimitPrice(): float; // Цена лимитного ордера при срабатывании цены тейк-профита
    public function getSlLimitPrice(): float; // Цена лимитного ордера при срабатывании стоп-лосса
    public function getTpTriggerBy(): string; // Триггерный тип тейк-профита
    public function getSlTriggerBy(): string; // Цена лимитного ордера при срабатывании стоп-лосса
    public function isReduceOnly(): bool; // Только уменьшить. true означает уменьшение размера позиции
    public function isCloseOnTrigger(): bool; 
    public function getSmpType(): string; // SMP execution type
    public function getSmpGroup(): int; // Smp group ID. If the uid has no group, it is 0 by default
    public function getSmpOrderId(): string; // The counterparty's orderID which triggers this SMP execution
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSide()</td>
    <td>string</td>
    <td>
        Направление. Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Тип ордера. Market,Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getPrice()</td>
    <td>float</td>
    <td>
        Цена ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getQty()</td>
    <td>float</td>
    <td>
        Количество ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
        Последняя цена при создании заказа
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Время создания ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Время обновления ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Тип отмены ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
       Тип завершения ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        1: рост, 2: снижение
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        Тип триггерной цены
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Триггерная цена
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Суммарное значение исполненной позиции
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Совокупная торговая комиссия
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Совокупное выполненное количество
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        Оставшаяся стоимость ожидает обмена
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        Оставшееся количество ожидает продажи
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Цена тейк-профита
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Цена стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL режим, Full: вся позиция по TP/SL. Partial: частичная позиция TP/SL
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        Цена лимитного ордера при срабатывании стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        true означает уменьшение размера позиции
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Закрытие по триггеру
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. Если у uid нет группы, по умолчанию он равен 0.
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        Идентификатор заказа контрагента, который инициирует выполнение этого SMP.
    </td>
  </tr>
</table>

---