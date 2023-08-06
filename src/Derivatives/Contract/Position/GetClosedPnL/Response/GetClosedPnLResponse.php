<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface;

class GetClosedPnLResponse extends AbstractResponse implements IGetClosedPnLResponseInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Order Id
     * @var string $orderId
     */
    private string $orderId;

    /**
     * Sell, Buy, Side
     * @var string $side
     */
    private string $side;

    /**
     * Order qty
     * @var float $qty
     */
    private float $qty;

    /**
     * leverage
     * @var float $leverage
     */
    private float $leverage;

    /**
     * Order price
     * @var float $orderPrice
     */
    private float $orderPrice;

    /**
     * Order type. Market,Limit
     * @var string $orderType
     */
    private string $orderType;

    /**
     * Exec type
     * @var string $execType
     */
    private string $execType;

    /**
     * Closed size
     * @var float $closedSize
     */
    private float $closedSize;

    /**
     * Cumulated entry position value
     * @var float $cumEntryValue
     */
    private float $cumEntryValue;

    /**
     * Average entry price
     * @var float $avgEntryPrice
     */
    private float $avgEntryPrice;

    /**
     * Cumulated exit position value
     * @var float $cumExitValue
     */
    private float $cumExitValue;

    /**
     * Average exit price
     * @var float $avgExitPrice
     */
    private float $avgExitPrice;

    /**
     * Closed PnL
     * @var float $closedPnl
     */
    private float $closedPnl;

    /**
     * The number of fills in a single order
     * @var int $fillCount
     */
    private int $fillCount;

    /**
     * The created time (ms)
     * @var \DateTime $createdAt
     */
    private \DateTime $createdAt;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setOrderId($data['orderId'])
            ->setSide($data['side'])
            ->setQty($data['qty'])
            ->setLeverage($data['leverage'])
            ->setOrderPrice($data['orderPrice'])
            ->setOrderType($data['orderType'])
            ->setExecType($data['execType'])
            ->setClosedSize($data['closedSize'])
            ->setCumEntryValue($data['cumEntryValue'])
            ->setAvgEntryPrice($data['avgEntryPrice'])
            ->setCumExitValue($data['cumExitValue'])
            ->setAvgExitPrice($data['avgExitPrice'])
            ->setClosedPnl($data['closedPnl'])
            ->setFillCount($data['fillCount'])
            ->setCreatedAt($data['createdAt']);
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return GetClosedPnLResponse
     */
    private function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return GetClosedPnLResponse
     */
    private function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
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
     * @param string $side
     * @return GetClosedPnLResponse
     */
    private function setSide(string $side): self
    {
        $this->side = $side;
        return $this;
    }

    /**
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }

    /**
     * @param float $qty
     * @return GetClosedPnLResponse
     */
    private function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return float
     */
    public function getLeverage(): float
    {
        return $this->leverage;
    }

    /**
     * @param float $leverage
     * @return GetClosedPnLResponse
     */
    private function setLeverage(float $leverage): self
    {
        $this->leverage = $leverage;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderPrice(): float
    {
        return $this->orderPrice;
    }

    /**
     * @param float $orderPrice
     * @return GetClosedPnLResponse
     */
    private function setOrderPrice(float $orderPrice): self
    {
        $this->orderPrice = $orderPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     * @return GetClosedPnLResponse
     */
    private function setOrderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * @return string
     */
    public function getExecType(): string
    {
        return $this->execType;
    }

    /**
     * @param string $execType
     * @return GetClosedPnLResponse
     */
    private function setExecType(string $execType): self
    {
        $this->execType = $execType;
        return $this;
    }

    /**
     * @return float
     */
    public function getClosedSize(): float
    {
        return $this->closedSize;
    }

    /**
     * @param float $closedSize
     * @return GetClosedPnLResponse
     */
    private function setClosedSize(float $closedSize): self
    {
        $this->closedSize = $closedSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getCumEntryValue(): float
    {
        return $this->cumEntryValue;
    }

    /**
     * @param float $cumEntryValue
     * @return GetClosedPnLResponse
     */
    private function setCumEntryValue(float $cumEntryValue): self
    {
        $this->cumEntryValue = $cumEntryValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgEntryPrice(): float
    {
        return $this->avgEntryPrice;
    }

    /**
     * @param float $avgEntryPrice
     * @return GetClosedPnLResponse
     */
    private function setAvgEntryPrice(float $avgEntryPrice): self
    {
        $this->avgEntryPrice = $avgEntryPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getCumExitValue(): float
    {
        return $this->cumExitValue;
    }

    /**
     * @param float $cumExitValue
     * @return GetClosedPnLResponse
     */
    private function setCumExitValue(float $cumExitValue): self
    {
        $this->cumExitValue = $cumExitValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgExitPrice(): float
    {
        return $this->avgExitPrice;
    }

    /**
     * @param float $avgExitPrice
     * @return GetClosedPnLResponse
     */
    private function setAvgExitPrice(float $avgExitPrice): self
    {
        $this->avgExitPrice = $avgExitPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getClosedPnl(): float
    {
        return $this->closedPnl;
    }

    /**
     * @param float $closedPnl
     * @return GetClosedPnLResponse
     */
    private function setClosedPnl(float $closedPnl): self
    {
        $this->closedPnl = $closedPnl;
        return $this;
    }

    /**
     * @return int
     */
    public function getFillCount(): int
    {
        return $this->fillCount;
    }

    /**
     * @param int $fillCount
     * @return GetClosedPnLResponse
     */
    private function setFillCount(int $fillCount): self
    {
        $this->fillCount = $fillCount;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return GetClosedPnLResponse
     */
    private function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = DateTimeHelper::makeFromTimestamp($createdAt);
        return $this;
    }


}