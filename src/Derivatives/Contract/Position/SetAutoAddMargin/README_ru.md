### Contract - Position - Set Auto Add Margin
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin)</b>
<p>Включить/выключить автоматическое добавление маржи позиции. Чтобы понять больше, пожалуйста, прочитайте <a href="https://www.bybit.com/en-US/help-center/s/article/Introduction-to-Auto-Margin-Replenishment-USDT-Contract" target="_blank">здесь</a></p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setSide(string $side): self;
    public function setAutoAddMargin(int $autoAddMargin): self;
    public function setPositionIdx(int $positionIdx): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces\ISetAutoAddMarginRequestInterface</b>
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
    <td>:: setSide(string $side)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setAutoAddMargin(int $autoAddMargin)</td>
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
