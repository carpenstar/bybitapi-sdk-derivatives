### Contract - Position - Set Risk Limit
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit)</b>
<p>Лимит риска будет ограничивать максимальную сумму позиции, которую вы можете удерживать при различных маржинальных требованиях. <br />
Если вы хотите удерживать позицию большего размера, вам потребуется больше маржи. <br />
Этот запрос может установить лимит риска для одной позиции. Если при размещении ордера превышен текущий лимит риска, он будет отклонен.</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces;

interface ISetRiskLimitRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setRiskId(int $riskId): self;
    public function setPositionIdx(int $positionIdx): self;

    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces\ISetRiskLimitRequestInterface</b>
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
    <td>:: setRiskId(int $riskId)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setPositionIdx(int $positionIdx)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив

