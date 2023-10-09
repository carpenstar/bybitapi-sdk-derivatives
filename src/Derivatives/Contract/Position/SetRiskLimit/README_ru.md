# Contract - Position - Set Risk Limit
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit)</b>
<p>Лимит риска будет ограничивать максимальную сумму позиции, которую вы можете удерживать при различных маржинальных требованиях. <br />
Если вы хотите удерживать позицию большего размера, вам потребуется больше маржи. <br />
Этот запрос может установить лимит риска для одной позиции. Если при размещении ордера превышен текущий лимит риска, он будет отклонен.</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces;

interface ISetRiskLimitRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setRiskId(int $riskId): self; // ID риска
     public function setPositionIdx(int $positionIdx): self; // Используется для идентификации позиций в различных режимах позиционирования.

     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces\ISetRiskLimitRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Request\SetRiskLimitRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метож</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setRiskId(int $riskId)</td>
     <td><b>YES</b></td>
     <td> ID риска </td>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>YES</b></td>
     <td> Используется для идентификации позиций в различных режимах позиционирования. Для режима хеджирования этот параметр является обязательным.
            0: односторонний режим
            1: Режим хеджирования Buy side
            2: Режим хеджирования Sell side 
     </td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---