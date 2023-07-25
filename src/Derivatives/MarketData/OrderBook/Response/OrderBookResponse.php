<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseBuilder;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Interfaces\ICollectionInterface;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;

class OrderBookResponse extends AbstractResponse
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
                $bidList->push(ResponseBuilder::make(OrderBookPriceItemResponse::class, $bid));
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
                $askList->push(ResponseBuilder::make(OrderBookPriceItemResponse::class, $ask));
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