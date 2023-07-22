<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseBuilder;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Interfaces\ICollectionInterface;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;

<<<<<<<< HEAD:src/Derivatives/MarketData/OrderBook/Response/OrderBookResponse.php
class OrderBookResponse extends ResponseEntity
========
class OrderBookAbstractResponse extends AbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/OrderBook/Response/OrderBookAbstractResponse.php
{
    private string $symbol;

    private \DateTime $timestamp;

    private int $updateId;

    private ICollectionInterface $bid;

    private ICollectionInterface $ask;

    public function __construct(array $data)
    {
        $this->bid = new EntityCollection();
        $this->ask = new EntityCollection();

        $this
            ->setSymbol($data['s'])
            ->setTimestamp($data['ts'])
            ->setUpdateId($data['u'])
            ->setBid($data['b'])
            ->setAsk($data['a']);
    }

    /**
     * @param string $symbol
     * @return self
     */
    private function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param int $timestamp
     * @return self
     */
    private function setTimestamp(int $timestamp): self
    {
        $this->timestamp = DateTimeHelper::makeFromTimestamp($timestamp);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }

    /**
     * @param $updateId
     * @return self
     */
    private function setUpdateId($updateId): self
    {
        $this->updateId = $updateId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpdateId(): int
    {
        return $this->updateId;
    }

    private function setBid(?array $bids = []): self
    {
        $bidList = $this->bid;

        if (!empty($bids)) {
            array_map(function ($bid) use ($bidList) {
<<<<<<<< HEAD:src/Derivatives/MarketData/OrderBook/Response/OrderBookResponse.php
                $bidList->push(ResponseBuilder::make(OrderBookPriceItemResponse::class, $bid));
========
                $bidList->push(ResponseBuilder::make(OrderBookPriceItemAbstractResponse::class, $bid));
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/OrderBook/Response/OrderBookAbstractResponse.php
            }, $bids);
        }

        return $this;
    }

    /**
     * @return ICollectionInterface
     */
    public function getBid(): ICollectionInterface
    {
        return $this->bid;
    }

    private function setAsk(?array $asks = []): self
    {
        $askList = $this->ask;

        if (!empty($asks)) {
            array_map(function ($ask) use ($askList) {
<<<<<<<< HEAD:src/Derivatives/MarketData/OrderBook/Response/OrderBookResponse.php
                $askList->push(ResponseBuilder::make(OrderBookPriceItemResponse::class, $ask));
========
                $askList->push(ResponseBuilder::make(OrderBookPriceItemAbstractResponse::class, $ask));
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/OrderBook/Response/OrderBookAbstractResponse.php
            }, $asks);
        }

        return $this;
    }

    /**
     * @return ICollectionInterface
     */
    public function getAsk(): ICollectionInterface
    {
        return $this->ask;
    }
}

/**
 * s
b	string	Bid. Order by price asc
a	string	Ask. Order by price asc

 */