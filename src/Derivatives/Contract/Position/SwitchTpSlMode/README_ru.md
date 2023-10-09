### Contract - Contract - Position - Switch TpSl Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode)</b>

<p>Запрос устанавливает неявный режим tpsl для определенного торгового инструмента. 
Имеет смысл использовать если вы не передали «tpslMode» в ордере при размещении или в запросе на остановку торговли т.к в таком случае система установит tpslMode по умолчанию.</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interfaces;

interface ISwitchTpSlModeRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setTpSlMode(string $tpSlMode): self; // Full: set TP/SL to full position. Partial: set TP/SL to partial mode
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interface\ISwitchTpSlModeRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Request\SwitchTpSlModeRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISwitchTpSlModeRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISwitchTpSlModeRequestInterface::setTpSlMode(string $tpSlMode)</td>
     <td><b>ДА</b></td>
     <td> Full: установка TP/SL для полной позиции. Partial: установить TP/SL для части позиции </td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---