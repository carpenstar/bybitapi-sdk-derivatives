# Contract - Position - Get Closed PnL
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Request information about closed positions with data on the user's profits and losses.</p>

> The result is sorted by createdAt in descending order.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
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
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setStartTime(int $startTime)</td>
     <td>NO</td>
     <td>Lower limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setEndTime(int $endTime)</td>
     <td>NO</td>
     <td>Upper limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setLimit(int $limit)</td>
     <td>NO</td>
     <td>Record limit per request</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setCursor(string $cursor)</td>
     <td>NO</td>
     <td>Next page cursor</td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    public function getSymbol(): string; // Trading pair
    public function getOrderId(): string; // order ID
    public function getSide(): string; // Order direction
    public function getQty(): float; // Order volume
    public function getLeverage(): float; // Leverage
    public function getOrderPrice(): float; // Order price
    public function getOrderType(): string; // Order type. Market,Limit
    public function getExecType(): string; // Execution type
    public function getClosedSize(): float; // Closed size
    public function getCumEntryValue(): float; // Cumulated entry position value
    public function getAvgEntryPrice(): float; // Average entry price
    public function getCumExitValue(): float; // Cumulated exit position value
    public function getAvgExitPrice(): float; // Average exit price
    public function getClosedPnl(): float; // Closed PnL
    public function getFillCount(): int; // The number of fills in a single order
    public function getCreatedAt(): \DateTime; // The created time
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSide()</td>
     <td>string</td>
     <td>Order direction</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getQty()</td>
     <td>float</td>
     <td>Order volume</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getLeverage()</td>
     <td>float</td>
     <td>Leverage</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Order price</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getExecType()</td>
     <td>string</td>
     <td>Execution type </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedSize()</td>
     <td>float</td>
     <td> Closed size </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> Cumulated entry position value </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> Average entry price </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumExitValue()</td>
     <td>float</td>
     <td> Cumulated exit position value </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> Average exit price </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedPnl()</td>
     <td>float</td>
     <td> Closed PnL </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getFillCount()</td>
     <td>float</td>
     <td> The number of fills in a single order </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td> The created time </td>
   </tr>
</table>
