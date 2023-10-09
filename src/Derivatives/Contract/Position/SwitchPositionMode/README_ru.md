# Contract - Position - Switch Position Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>Запрос поддерживает переключение режима позиции для бессрочных и обратных фьючерсов USDT. <br />
Если вы находитесь в одностороннем режиме, вы можете открыть только одну позицию на стороне покупки или продажи. <br />
Если вы находитесь в режиме хеджирования, вы можете одновременно открывать позиции на покупку и продажу.</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setCoin(string $coin): self; // Токен
     public function setPositionMode(int $positionMode): self; // Режим позиции. 0: Merged Single. 3: Both Side
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces\ISwitchPositionModeRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Request\SwitchPositionModeRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setSymbol(string $symbol)</td>
     <td>НЕТ</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setCoin(string $coin)</td>
     <td>НЕТ</td>
     <td> Токен </td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setPositionMode(int $positionMode)</td>
     <td><b>ДА</b></td>
     <td> Редим позиции. 0: Merged Single. 3: Both Side </td>
   </tr>
</table>

<p align="center" width="100%"><b>Структура ответа</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---

