### Contract - Contract - Position - Switch Position Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>Запрос поддерживает переключение режима позиции для бессрочных и обратных фьючерсов USDT. <br />
Если вы находитесь в одностороннем режиме, вы можете открыть только одну позицию на стороне покупки или продажи. <br />
Если вы находитесь в режиме хеджирования, вы можете одновременно открывать позиции на покупку и продажу.</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setCoin(string $coin): self;
    public function setPositionMode(int $positionMode): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces\ISwitchPositionModeRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setCoin(string $coin)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setPositionMode(int $positionMode)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив

