# Contract - Position - Set Leverage
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Установить кредитное плечо позции</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setBuyLeverage(float $buyLeverage): self; // (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage
     public function setSellLeverage(float $sellLeverage): self; // (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces\ISetLeverageRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request\SetLeverageRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>ДА</b></td>
     <td> (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage </td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>ДА</b></td>
     <td>(0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage</td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---