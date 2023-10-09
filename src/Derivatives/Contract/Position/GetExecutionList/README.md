# Contract - Position - Get Execution List
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/execution-list)</b>
<p>List of executed user orders, sorted by execution time in descending order. Supports USDT perpetual currency pairs</p>

> A user can have multiple executions in one order.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setStartTime(int $startTime): self; // Lower limit of the date from which to take records
     public function setEndTime(int $endTime): self; // Upper limit of the date from which to take records
     public function setLimit(int $limit): self; // Record limit per request
     public function setCursor(string $cursor): self; // Next page cursor
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Request\GetExecutionListRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setStartTime(int $startTime)</td>
     <td>NO</td>
     <td>Lower limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setEndTime(int $endTime)</td>
     <td>NO</td>
     <td>Upper limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setLimit(int $limit)</td>
     <td>NO</td>
     <td>Record limit per request</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setCursor(string $cursor)</td>
     <td>NO</td>
     <td>Next page cursor</td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseInterface
{
     public function getSymbol(): string; // Trading pair
     public function getOrderId(): string; // order ID
     public function getSide(): string; // Order direction
     public function getQty(): float; // Order volume
     public function getLeverage(): float; // Leverage
     public function getOrderPrice(): float; // Order price
     public function getOrderType(): string; // Market,Limit
     public function getExecType(): string; // Execution type
     public function getClosedSize(): float; // Close size
     public function getCumEntryValue(): float; //
     public function getAvgEntryPrice(): float; //
     public function getCumExitValue(): float; //
     public function getAvgExitPrice(): float; //
     public function getClosedPnl(): float; //
     public function getFillCount(): int; //
     public function getCreatedAt(): \DateTime; //
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getSide()</td>
     <td>string</td>
     <td>Order direction</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getQty()</td>
     <td>float</td>
     <td>Order volume</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getLeverage()</td>
     <td>float</td>
     <td>Leverage</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Order price</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getExecType()</td>
     <td>string</td>
     <td> Execution type </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getClosedSize()</td>
     <td>float</td>
     <td> Close size </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCumExitValue()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getClosedPnl()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getFillCount()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td> - </td>
   </tr>
</table>

---