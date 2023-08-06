### Contract - Contract - Position - Switch TpSl Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode)</b>

<p>Запрос устанавливает неявный режим tpsl для определенного торгового инструмента. 
Имеет смысл использовать если вы не передали «tpslMode» в ордере при размещении или в запросе на остановку торговли т.к в таком случае система установит tpslMode по умолчанию.</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interfaces;

interface ISwitchTpSlModeRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setTpSlMode(string $tpSlMode): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interface\ISwitchTpSlModeRequestInterface</b>
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
    <td>:: setTpSlMode(string $tpSlMode)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив

