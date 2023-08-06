<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseInterface;

class GetExecutionListResponse extends AbstractResponse implements IGetExecutionListResponseInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Buy,Sell
     * @var string $side
     */
    private string $side;

    /**
     * Order id
     * @var string $orderId
     */
    private string $orderId;

    /**
     * User customised order id
     * @var string $orderLinkId
     */
    private string $orderLinkId;

    /**
     * Order price
     * @var float $orderPrice
     */
    private float $orderPrice;

    /**
     * Order qty
     * @var float $orderQty
     */
    private float $orderQty;

    /**
     * Market,Limit
     * @var string $orderType
     */
    private string $orderType;

    /**
     * Stop order type
     * @var string $stopOrderType
     */
    private string $stopOrderType;

    /**
     * Trade Id
     * @var string $execId
     */
    private string $execId;

    /**
     * Execution price
     * @var float $execPrice
     */
    private float $execPrice;

    /**
     * Execution qty
     * @var float $execQty
     */
    private float $execQty;

    /**
     * Execution fee
     * @var float $execFee
     */
    private float $execFee;

    /**
     * Execution type
     * @var string $execType
     */
    private string $execType;

    /**
     * Execution position value
     * @var float $execValue
     */
    private float $execValue;

    /**
     * Trading fee rate
     * @var float $feeRate
     */
    private float $feeRate;

    /**
     * AddedLiquidity, RemovedLiquidity
     * @var string $lastLiquidityInd
     */
    private string $lastLiquidityInd;

    /**
     * Is maker
     * @var bool $isMaker
     */
    private bool $isMaker;

    /**
     * Remaining qty waiting for execution
     * @var float $leavesQty
     */
    private float $leavesQty;

    /**
     * Close size
     * @var float $closedSize
     */
    private float $closedSize;

    /**
     * Block trade id
     * @var string $blockTradeId
     */
    private string $blockTradeId;

    /**
     * Mark price
     * @var float $markPrice
     */
    private float $markPrice;

    /**
     * Index price
     * @var float $indexPrice
     */
    private float $indexPrice;

    /**
     * Underlying price
     * @var float $underlyingPrice
     */
    private float $underlyingPrice;

    /**
     * Execution timestamp (ms)
     * @var \DateTime $execTime
     */
    private \DateTime $execTime;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setSide($data['side'])
            ->setOrderId($data['orderId'])
            ->setOrderLinkId($data['orderLinkId'])
            ->setOrderPrice((float) $data['orderPrice'])
            ->setOrderQty((float) $data['orderQty'])
            ->setOrderType($data['orderType'])
            ->setStopOrderType($data['stopOrderType'])
            ->setExecId($data['execId'])
            ->setExecQty((float) $data['execPrice'])
            ->setExecQty((float) $data['execQty'])
            ->setExecFee((float) $data['execFee'])
            ->setExecType($data['execType'])
            ->setExecValue((float) $data['execValue'])
            ->setFeeRate((float) $data['feeRate'])
            ->setLastLiquidityInd($data['lastLiquidityInd'])
            ->setIsMaker($data['isMaker'])
            ->setLeavesQty((float) $data['leavesQty'])
            ->setClosedSize((float) $data['closedSize'])
            ->setBlockTradeId($data['blockTradeId'])
            ->setMarkPrice((float) $data['markPrice'])
            ->setIndexPrice((float) $data['indexPrice'])
            ->setUnderlyingPrice((float) $data['underlyingPrice'])
            ->setExecTime($data['execTime']);
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
     * @return GetExecutionListResponse
     */
    private function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
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
     * @return GetExecutionListResponse
     */
    private function setSide(string $side): self
    {
        $this->side = $side;
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
     * @return GetExecutionListResponse
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }

    /**
     * @param string $orderLinkId
     * @return GetExecutionListResponse
     */
    private function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
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
     * @return GetExecutionListResponse
     */
    private function setOrderPrice(float $orderPrice): self
    {
        $this->orderPrice = $orderPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderQty(): float
    {
        return $this->orderQty;
    }

    /**
     * @param float $orderQty
     * @return GetExecutionListResponse
     */
    private function setOrderQty(float $orderQty): self
    {
        $this->orderQty = $orderQty;
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
     * @return GetExecutionListResponse
     */
    private function setOrderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStopOrderType(): string
    {
        return $this->stopOrderType;
    }

    /**
     * @param string $stopOrderType
     * @return GetExecutionListResponse
     */
    private function setStopOrderType(string $stopOrderType): self
    {
        $this->stopOrderType = $stopOrderType;
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
     * @param string $execId
     * @return GetExecutionListResponse
     */
    private function setExecId(string $execId): self
    {
        $this->execId = $execId;
        return $this;
    }

    /**
     * @return float
     */
    public function getExecPrice(): float
    {
        return $this->execPrice;
    }

    /**
     * @param float $execPrice
     * @return GetExecutionListResponse
     */
    private function setExecPrice(float $execPrice): self
    {
        $this->execPrice = $execPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getExecQty(): float
    {
        return $this->execQty;
    }

    /**
     * @param float $execQty
     * @return GetExecutionListResponse
     */
    private function setExecQty(float $execQty): self
    {
        $this->execQty = $execQty;
        return $this;
    }

    /**
     * @return float
     */
    public function getExecFee(): float
    {
        return $this->execFee;
    }

    /**
     * @param float $execFee
     * @return GetExecutionListResponse
     */
    private function setExecFee(float $execFee): self
    {
        $this->execFee = $execFee;
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
     * @return GetExecutionListResponse
     */
    private function setExecType(string $execType): self
    {
        $this->execType = $execType;
        return $this;
    }

    /**
     * @return float
     */
    public function getExecValue(): float
    {
        return $this->execValue;
    }

    /**
     * @param float $execValue
     * @return GetExecutionListResponse
     */
    private function setExecValue(float $execValue): self
    {
        $this->execValue = $execValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getFeeRate(): float
    {
        return $this->feeRate;
    }

    /**
     * @param float $feeRate
     * @return GetExecutionListResponse
     */
    private function setFeeRate(float $feeRate): self
    {
        $this->feeRate = $feeRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastLiquidityInd(): string
    {
        return $this->lastLiquidityInd;
    }

    /**
     * @param string $lastLiquidityInd
     * @return GetExecutionListResponse
     */
    private function setLastLiquidityInd(string $lastLiquidityInd): self
    {
        $this->lastLiquidityInd = $lastLiquidityInd;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMaker(): bool
    {
        return $this->isMaker;
    }

    /**
     * @param bool $isMaker
     * @return GetExecutionListResponse
     */
    private function setIsMaker(bool $isMaker): self
    {
        $this->isMaker = $isMaker;
        return $this;
    }

    /**
     * @return float
     */
    public function getLeavesQty(): float
    {
        return $this->leavesQty;
    }

    /**
     * @param float $leavesQty
     * @return GetExecutionListResponse
     */
    private function setLeavesQty(float $leavesQty): self
    {
        $this->leavesQty = $leavesQty;
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
     * @return GetExecutionListResponse
     */
    private function setClosedSize(float $closedSize): self
    {
        $this->closedSize = $closedSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlockTradeId(): string
    {
        return $this->blockTradeId;
    }

    /**
     * @param string $blockTradeId
     * @return GetExecutionListResponse
     */
    private function setBlockTradeId(string $blockTradeId): self
    {
        $this->blockTradeId = $blockTradeId;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkPrice(): float
    {
        return $this->markPrice;
    }

    /**
     * @param float $markPrice
     * @return GetExecutionListResponse
     */
    private function setMarkPrice(float $markPrice): self
    {
        $this->markPrice = $markPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getIndexPrice(): float
    {
        return $this->indexPrice;
    }

    /**
     * @param float $indexPrice
     * @return GetExecutionListResponse
     */
    private function setIndexPrice(float $indexPrice): self
    {
        $this->indexPrice = $indexPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnderlyingPrice(): float
    {
        return $this->underlyingPrice;
    }

    /**
     * @param float $underlyingPrice
     * @return GetExecutionListResponse
     */
    private function setUnderlyingPrice(float $underlyingPrice): self
    {
        $this->underlyingPrice = $underlyingPrice;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExecTime(): \DateTime
    {
        return $this->execTime;
    }

    /**
     * @param string $execTime
     * @return GetExecutionListResponse
     */
    private function setExecTime(string $execTime): self
    {
        $this->execTime = DateTimeHelper::makeFromTimestamp($execTime);
        return $this;
    }
}