### Market Data - Ticker Info
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/ticker)</b>
<p>Эндпоинт возвращает данные по символу (последний снимок цены, лучшую цену покупки/продажи и объем торгов) за последние 24 часа.</p>

```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfo::class
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response\TickerInfoResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\TickerInfo;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new TickerInfoRequest())
    ->setSymbol("APTUSDT");

$tickerInfo = $bybit->rest(TickerInfo::class, $options)->getBody()->fetch();



/** @var TickerInfoResponse $tickerInfo */
echo "Symbol: {$tickerInfo->getSymbol()}" . PHP_EOL;
echo "Bid Price: {$tickerInfo->getBidPrice()}" . PHP_EOL;
echo "Ask Price: {$tickerInfo->getAskPrice()}" . PHP_EOL;
echo "Last Price: {$tickerInfo->getLastPrice()}" . PHP_EOL;
echo "Last Tick Direction: {$tickerInfo->getLastTickDirection()}" . PHP_EOL;
echo "Prev Price 24 hours: {$tickerInfo->getPrevPrice24h()}" . PHP_EOL;
echo "Prev Price 24 hours(%): {$tickerInfo->getPrice24hPcnt()}" . PHP_EOL;
echo "High Price 24 hours: {$tickerInfo->getHighPrice24h()}" . PHP_EOL;
echo "Low Price 24 hours: {$tickerInfo->getLowPrice24h()}" . PHP_EOL;
echo "Prev price 1 hour: {$tickerInfo->getPrevPrice1h()}" . PHP_EOL;
echo "Mark Price: {$tickerInfo->getMarkPrice()}" . PHP_EOL;
echo "Index Price: {$tickerInfo->getIndexPrice()}" . PHP_EOL;
echo "Open Interest: {$tickerInfo->getOpenInterests()}" . PHP_EOL;
echo "Open Interest Value: {$tickerInfo->getOpenInterestValue()}" . PHP_EOL;
echo "Turnover 24 hours: {$tickerInfo->getTurnover24h()}" . PHP_EOL;
echo "Volume 24 hours: {$tickerInfo->getVolume24h()}" . PHP_EOL;
echo "Funding Rate: {$tickerInfo->getFundingRate()}" . PHP_EOL;
echo "Next Funding Time: {$tickerInfo->getNextFundingTime()->format("Y-m-d H:i:s")}" . PHP_EOL;
echo "Predicted Delivery Price: {$tickerInfo->getPredictedDeliveryPrice()}" . PHP_EOL;
echo "Basis Rate: {$tickerInfo->getBasisRate()}" . PHP_EOL;
echo "Delivery Fee Rate: {$tickerInfo->getDeliveryFeeRate()}" . PHP_EOL;
echo "Delivery Time: {$tickerInfo->getDeliveryTime()->format("Y-m-d H:i:s")}" . PHP_EOL;

/**
 * Result: 
 * 
 * Symbol: APTUSDT
 * Bid Price: 8.285
 * Ask Price: 8.2855
 * Last Price: 8.2855
 * Last Tick Direction: ZeroMinusTick
 * Prev Price 24 hours: 8.667
 * Prev Price 24 hours(%): -0.044017
 * High Price 24 hours: 8.667
 * Low Price 24 hours: 7.505
 * Prev price 1 hour: 8.254
 * Mark Price: 8.2872
 * Index Price: 8.2919
 * Open Interest: 403884.9
 * Open Interest Value: 3347074.94
 * Turnover 24 hours: 12624160.9399
 * Volume 24 hours: 1535221.53
 * Funding Rate: 2.8E-5
 * Next Funding Time: 2023-05-10 00:00:00
 * Predicted Delivery Price: 0
 * Basis Rate: 0
 * Delivery Fee Rate: 0
 * Delivery Time: 1970-01-01 00:00:00
 */
```  

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest::class

$options = (new TickerInfoRequest())
    ->setSymbol("APTUSDT");
```  

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Строка с тикером торговой пары</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponse::class;

interface ITickerInfoResponse
{    
    public function getSymbol(): string;
    public function getBidPrice(): float;
    public function getAskPrice(): float;
    public function getLastPrice(): float;
    public function getLastTickDirection(): string;
    public function getPrevPrice24h(): float;
    public function getPrice24hPcnt(): float;
    public function getHighPrice24h(): float;
    public function getLowPrice24h(): float;
    public function getPrevPrice1h(): float;
    public function getMarkPrice(): float;
    public function getIndexPrice(): float;
    public function getOpenInterests(): float;
    public function getTurnover24h(): float;
    public function getVolume24h(): float;
    public function getFundingRate(): float;
    public function getNextFundingTime(): \DateTime;
    public function getPredictedDeliveryPrice(): float;
    public function getBasisRate(): float;
    public function getDeliveryFeeRate(): float;
    public function getDeliveryTime(): \DateTime;
    public function getOpenInterestValue(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>
      Торговый инструмент
    </td>
  </tr>
  <tr>
    <td>:: getBidPrice()</td>
    <td>float</td>
    <td>
      Лучшая цена продажи
    </td>
  </tr>
  <tr>
    <td>:: getAskPrice()</td>
    <td>float</td>
    <td>
      Лучшая цена покупки
    </td>
  </tr>
  <tr>
    <td>:: getLastPrice()</td>
    <td>float</td>
    <td>
      Цена последней тразакции
    </td>
  </tr>
  <tr>
    <td>:: getLastTickDirection()</td>
    <td>string</td>
    <td>
      Направление последнего изменения цены
    </td>
  </tr>
  <tr>
    <td>:: getPrevPrice24h()</td>
    <td>float</td>
    <td>
      Цена 24 часа назад
    </td>
  </tr>
  <tr>
    <td>:: getPrice24hPcnt()</td>
    <td>float</td>
    <td>
      Изменение цены за последние 24 часа в процентах
    </td>
  </tr>
  <tr>
    <td>:: getHighPrice24h()</td>
    <td>float</td>
    <td>
      Максимальная цена за 24 часа
    </td>
  </tr>
  <tr>
    <td>:: getLowPrice24h()</td>
    <td>float</td>
    <td>
      Минимальная цена за 24 часа
    </td>
  </tr>
  <tr>
    <td>:: getPrevPrice1h()</td>
    <td>float</td>
    <td>
      Почасовая рыночная цена час назад
    </td>
  </tr>
  <tr>
    <td>:: getMarkPrice()</td>
    <td>float</td>
    <td>
      Цена маркировки (ликвидация происходит по этому показателю)
    </td>
  </tr>
  <tr>
    <td>:: getIndexPrice()</td>
    <td>float</td>
    <td>
      Цена индекса
    </td>
  </tr>
  <tr>
    <td>:: getOpenInterests()</td>
    <td>float</td>
    <td>
      Обьем открытого интереса по торговому интсрументу
    </td>
  </tr>
  <tr>
    <td>:: getTurnover24h()</td>
    <td>float</td>
    <td>
      Оборот за 24 часа
    </td>
  </tr>
  <tr>
    <td>:: getVolume24h()</td>
    <td>float</td>
    <td>
      Совокупный обьем за 24 часа
    </td>
  </tr>
  <tr>
    <td>:: getFundingRate()</td>
    <td>float</td>
    <td>
      Ставка финансирования
    </td>
  </tr>
  <tr>
    <td>:: getNextFundingTime()</td>
    <td>DateTime</td>
    <td>
      Время следующего списания ставки финансирования
    </td>
  </tr>
  <tr>
    <td>:: getPredictedDeliveryPrice()</td>
    <td>float</td>
    <td> 
      -
    </td>
  </tr>
  <tr>
    <td>:: getBasisRate()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getDeliveryFeeRate()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getDeliveryTime()</td>
    <td>DateTime</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getOpenInterestValue()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
</table>