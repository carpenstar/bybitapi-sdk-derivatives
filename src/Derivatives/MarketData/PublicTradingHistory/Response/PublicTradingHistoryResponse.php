<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse;

class PublicTradingHistoryResponse extends AbstractResponse implements IPublicTradingHistoryResponse
{
    /**
     * Execution id
     * @var string $execId
     */
    private string $execId;

    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Trade price
     * @var float $price
     */
    private float $price;

    /**
     * Trade size
     * @var float $size
     */
    private float $size;

    /**
     * Side of taker Buy, Sell
     * @var string $side
     */
    private string $side;

    /**
     * Trade time
     * @var \DateTime $time
     */
    private \DateTime $time;

    /**
     * Is block trade
     * @var bool $isBlockTrade
     */
    private bool $isBlockTrade;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setTime($data['time'])
            ->setPrice($data['price'])
            ->setSize($data['size'])
            ->setSide($data['side'])
            ->setExecId($data['execId'])
            ->setIsBlockTrade($data['isBlockTrade']);
    }

    /**
     * @param string $execId
<<<<<<<< HEAD:src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryResponse.php
     * @return PublicTradingHistoryResponse
========
     * @return PublicTradingHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryAbstractResponse.php
     */
    private function setExecId(string $execId): self
    {
        $this->execId = $execId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExecId(): string
    {
        return $this->execId;
    }

    /**
     * @param string $symbol
<<<<<<<< HEAD:src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryResponse.php
     * @return PublicTradingHistoryResponse
========
     * @return PublicTradingHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryAbstractResponse.php
     */
    public function setSymbol(string $symbol): self
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
     * @param float $price
<<<<<<<< HEAD:src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryResponse.php
     * @return PublicTradingHistoryResponse
========
     * @return PublicTradingHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryAbstractResponse.php
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $size
<<<<<<<< HEAD:src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryResponse.php
     * @return PublicTradingHistoryResponse
========
     * @return PublicTradingHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryAbstractResponse.php
     */
    private function setSize(float $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return float
     */
    public function getSize(): float
    {
        return $this->size;
    }

    /**
     * @param string $side
<<<<<<<< HEAD:src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryResponse.php
     * @return PublicTradingHistoryResponse
========
     * @return PublicTradingHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryAbstractResponse.php
     */
    private function setSide(string $side): self
    {
        $this->side = $side;
        return $this;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @param int $timestamp
<<<<<<<< HEAD:src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryResponse.php
     * @return PublicTradingHistoryResponse
========
     * @return PublicTradingHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryAbstractResponse.php
     */
    private function setTime(int $timestamp): self
    {
        $this->time = DateTimeHelper::makeFromTimestamp($timestamp);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @param bool $isBlockTrade
<<<<<<<< HEAD:src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryResponse.php
     * @return PublicTradingHistoryResponse
========
     * @return PublicTradingHistoryAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/PublicTradingHistory/Response/PublicTradingHistoryAbstractResponse.php
     */
    private function setIsBlockTrade(bool $isBlockTrade): self
    {
        $this->isBlockTrade = $isBlockTrade;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBlockTrade(): bool
    {
        return $this->isBlockTrade;
    }


}