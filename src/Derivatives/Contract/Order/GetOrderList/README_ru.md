# Contract - Contract - Order - Get Order List
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/order-list)</b>
<p>Список ордеров</p>

> Since order creation/cancellation is asynchronous, the data returned from this endpoint may be delayed.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Пользовательский ID ордера
    public function setOrderStatus(string $orderStatus): self; // Статус заказа. Возращает все ордера по определенному статусу
    public function setOrderFilter(string $orderFilter): self; // Возможные значения: Order: активный ордер, StopOrder: условный ордер.
    public function setLimit(int $limit): self; // Ограничение размера данных на странице. [1, 50]. По умолчанию: 20
    public function setCursor(string $cursor): self; // Курсор следующей страницы
    
    // .. getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request\GetOrderListRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td> Торговая пара </td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderStatus(string $orderStatus)</td>
    <td>НЕТ</td>
    <td>Статус заказа. Вернуть все заказы, если параметр не был передан</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: <b>Order</b>: активный ордер, <b>StopOrder</b>: условный ордер.</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setLimit(int $limit)</td>
    <td>НЕТ</td>
    <td>Ограничение размера данных на странице. [1, 50]. По умолчанию: 20</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListResponseInterface
{
    public function getSymbol(): string; // Торговая пара
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
    public function getSide(): string; // Buy,Sell
    public function getOrderType(): string; // Тип ордера. Market, Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    public function getPrice(): float; // Цена ордера
    public function getQty(): float; // Количество ордера
    public function getTimeInForce(): string; // Time in force
    public function getOrderStatus(): string; // Статус ордера
    public function getLastPriceOnCreated(): string; // Цена последней сделки при размещении ордера
    public function getCreatedTime(): \DateTime; // Время создания оредра
    public function getUpdatedTime(): \DateTime; // Время обновления ордера
    public function getCancelType(): string; // Тип отмены
    public function getStopOrderType(): string; // Тип завершения ордера
    public function getTriggerDirection(): int; // Направление триггера. 1: подъем, 2: падение
    public function getTriggerBy(): string; // Тип триггерной цены
    public function getTriggerPrice(): ?float; // Триггерная цена
    public function getCumExecValue(): float; // Совокупная стоимость исполненного ордера
    public function getCumExecFee(): float; // Совокупная комиссия за исполненную торговлю
    public function getCumExecQty(): float; // Совокупное количество выполненных заказов
    public function getLeavesValue(): float; // Не исполненная оценочная стоимость
    public function getLeavesQty(): float; // Не исполненное количество
    public function getTakeProfit(): float; // Цена тэйк-профита
    public function getStopLoss(): float; // Цена стоп-лосса
    public function getTpslMode(): string; // Режим TP/SL, Full: вся позиция по TP/SL. Partial: частичное положение TP/SL
    public function getTpLimitPrice(): float; // Цена лимитного ордера при срабатывании цены тейк-профита
    public function getSlLimitPrice(): float; // Цена лимитного ордера при срабатывании стоп-лосса
    public function getTpTriggerBy(): string; // Тип цены для активации тейк-профита
    public function getSlTriggerBy(): string; // Тип цены для срабатывания стоп-лосса
    public function isReduceOnly(): bool; // Reduce only.true означает уменьшение размера позиции
    public function isCloseOnTrigger(): bool; //Закрытие по триггеру
    public function getSmpType(): string; // SMP execution type
    public function getSmpGroup(): int; // Smp group ID. Если у uid нет группы, по умолчанию он равен 0.
    public function getSmpOrderId(): string; // Идентификатор заказа контрагента, который запускает выполнение этого SMP. Идентификатор заказа контрагента, который запускает выполнение этого SMP.
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSide()</td>
    <td>string</td>
    <td>
        Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderType()</td>
    <td>string</td>
    <td>
       Тип ордера. Market, Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getPrice()</td>
    <td>float</td>
    <td>
        Цена ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getQty()</td>
    <td>float</td>
    <td>
        Количество ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
       Последняя цена при размещении ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Время создания ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Время обновления ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Тип отмены
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
       Тип завершения ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        Направление триггера. 1: подъем, 2: падение
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
       Тип триггерной цены
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Триггерная цена
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Совокупная стоимость исполненного ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Совокупная комиссия за исполненную торговлю
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Совокупное количество выполненных заказов
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        Неисполненная стоимость ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        Не исполненное оставшееся количество
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Цена тейк-профита
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getStopLoss()</td>
    <td>float</td>
    <td>
       Цена стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        Режим TP/SL, Full: вся позиция по TP/SL. Частичное: частичное положение TP/SL
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        Тип цены для срабатывания стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true означает уменьшение размера позиции
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Закрытие по триггеру
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. Если у uid нет группы, по умолчанию он равен 0.
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        Идентификатор заказа контрагента, который инициирует выполнение этого SMP.
    </td>
  </tr>
</table>

---