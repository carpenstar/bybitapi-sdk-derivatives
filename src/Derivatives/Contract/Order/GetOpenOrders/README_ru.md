### Contract - Contract - Order - Get Open Orders
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/open-order)</b>
<p>Эндпоинт возвращает данные об открытых или частично исполненных заказов в режиме реального времени.</p>

> Если не переданы ни orderId, ни orderLinkId, будет возвращено не более 500 открытых или частично исполненных ордеров.
> Записи сортируются по времени создания от самых новых к самым старым.

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBaseCoin(string $baseCoin): self;
    public function setSettleCoin(string $settleCoin): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderFilter(string $orderFilter): self;
    public function setCursor(string $cursor): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td> Базовый токен </td>
  </tr>
  <tr>
    <td>:: setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Расчетный токен</td>
  </tr>
  <tr>
    <td>:: setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский order ID</td>
  </tr>
  <tr>
    <td>:: setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: <b>Order</b>: активный ордер, <b>StopOrder</b>: условный ордер</td>
  </tr>
  <tr>
    <td>:: setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getSide(): string;
    public function getOrderType(): string;
    public function getPrice(): float;
    public function getQty(): float;
    public function getTimeInForce(): string;
    public function getOrderStatus(): string;
    public function getLastPriceOnCreated(): string;
    public function getCreatedTime(): \DateTime;
    public function getUpdatedTime(): \DateTime;
    public function getCancelType(): string;
    public function getStopOrderType(): string;
    public function getTriggerDirection(): int;
    public function getTriggerBy(): string;
    public function getTriggerPrice(): ?float;
    public function getCumExecValue(): float;
    public function getCumExecFee(): float;
    public function getCumExecQty(): float;
    public function getLeavesValue(): float;
    public function getLeavesQty(): float;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getTpslMode(): string;
    public function getTpLimitPrice(): float;
    public function getSlLimitPrice(): float;
    public function getTpTriggerBy(): string;
    public function getSlTriggerBy(): string;
    public function isReduceOnly(): bool;
    public function isCloseOnTrigger(): bool;
    public function getSmpType(): string;
    public function getSmpGroup(): int;
    public function getSmpOrderId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface</b>
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
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский Order ID</td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getOrderType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getPrice()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTimeInForce()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCreatedTime()</td>
    <td>DateTime</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCancelType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getStopOrderType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerDirection()</td>
    <td>int</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerBy()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerPrice()</td>
    <td>null|float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecValue()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecFee()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLeavesValue()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLeavesQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTakeProfit()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getStopLoss()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTpslMode()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSlTriggerBy()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: isReduceOnly()</td>
    <td>bool</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: isCloseOnTrigger()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSmpType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSmpGroup()</td>
    <td>string</td>
    <td>
    -
    </td>
  </tr>
  <tr>
    <td>:: getSmpOrderId()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
</table>
