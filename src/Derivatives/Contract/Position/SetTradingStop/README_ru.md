### Contract - Position - Set Trading Stop
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop)</b>

<p>Запрос устанавливает значение тейк-профита, стоп-лоса или трейлинга</p>

> Передача этих параметров создаст внутри системы условные ордера.

> Система отменит эти ордера, если позиция будет закрыта, и скорректирует количество в соответствии с размером открытой позиции.

> Поддержка бессрочных USDT и USDC Perpetual. Примечание: USDC Perpetual не поддерживает частичный режим TP/SL.

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces;

interface ISetTradingStopRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setTakeProfit(float $takeProfit): self;
    public function setStopLoss(float $stopLoss): self;
    public function setTpslMode(string $tpslMode): self;
    public function setTpSize(float $tpSize): self;
    public function setSlSize(float $slSize): self;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function setTrailingStop(float $trailingStop): self;
    public function setActivePrice(float $activePrice): self;
    public function setTpLimitPrice(float $tpLimitPrice): self;
    public function setSlLimitPrice(float $slLimitPrice): self;
    public function setTpOrderType(string $tpOrderType): self;
    public function setSlOrderType(string $slOrderType): self;
    public function setPositionIdx(int $positionIdx): self;

    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces\ISetTradingStopRequestInterface</b>
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
    <td>:: setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpslMode(string $tpslMode)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpSize(float $tpSize)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSlSize(float $slSize)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTrailingStop(float $trailingStop)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setActivePrice(float $activePrice)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpLimitPrice(float $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSlLimitPrice(float $slLimitPrice)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpOrderType(string $tpOrderType)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSlOrderType(string $slOrderType)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setPositionIdx(int $positionIdx)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив
