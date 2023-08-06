### Contract - Contract - Position - Set Leverage
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Установить кредитное плечо позции</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBuyLeverage(float $buyLeverage): self;
    public function setSellLeverage(float $sellLeverage): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces\ISetLeverageRequestInterface</b>
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
    <td>:: setBuyLeverage(float $buyLeverage)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSellLeverage(float $sellLeverage)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив
