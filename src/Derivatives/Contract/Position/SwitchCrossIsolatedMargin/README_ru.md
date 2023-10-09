# Contract - Position - Switch Cross Isolated Margin
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated)</b>

<p>Запрос изменяет режим маржи (Кросс или Изолированная)</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setTradeMode(int $tradeMode): self; // 0: cross margin. 1: isolated margin
     public function setBuyLeverage(float $buyLeverage): self; // Установка кредитного плеча направления покупки. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи.
     public function setSellLeverage(float $sellLeverage): self; // Установка кредитного плеча направления продажи. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи.
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces\ISwitchCrossIsolatedMarginRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Request\SwitchCrossIsolatedMarginRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setTradeMode(int $tradeMode)</td>
     <td><b>ДА</b></td>
     <td> 0: cross margin. 1: isolated margin </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>ДА</b></td>
     <td> Установка кредитного плеча направления покупки. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи. </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>ДА</b></td>
     <td> Установка кредитного плеча направления продажи. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи </td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---
