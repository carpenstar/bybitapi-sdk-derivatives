<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponse;
use DateTime;

class InstrumentInfoResponse extends AbstractResponse implements IInstrumentInfoResponse
{
    /**
     * Derivatives products category. Keeps empty string `""` when `category` is not passed
     * @var string|null
     */
    private ?string $symbol;

    /**
     * Contract type. `LinearPerpetual`, `InversePerpetual`, `InverseFutures`
     * @var null|string $contractType
     */
    private ?string $contractType;

    /**
     * Symbol status
     * @var null|string $status
     */
    private ?string $status;

    /**
     * Base coin. e.g BTCUSDT, BTC is base coin
     * @var string|null $baseCoin
     */
    private ?string $baseCoin;

    /**
     * Quote coin. e.g BTCPERP, USDC is quote coin
     * @var string|null
     */
    private ?string $quoteCoin;

    /**
     * The launch timestamp (ms)
     * @var \DateTime|null
     */
    private \DateTime $launchTime;

    /**
     * The delivery timestamp (ms). "0" for perpetual
     * @var null|DateTime $deliveryTime
     */
    private ?\DateTime $deliveryTime;

    /**
     * The delivery fee rate
     * @var float
     */
    private float $deliveryFeeRate;

    /**
     * Price scale
     * @var float
     */
    private float $priceScale;

    /**
     * Support unified margin trade or not
     * @var bool
     */
    private bool $unifiedMarginTrade;

    /**
     * Funding interval (minute)
     * @var int
     */
    private int $fundingInterval;

    /**
     * Settle coin. e.g BTCUSD, BTC is settle coin
     * @var string|null
     */
    private ?string $settleCoin;

    /**
     * @var EntityCollection
     */
    private EntityCollection $leverageFilter;

    /**
     * @var EntityCollection $pricefilter
     */
    private EntityCollection $priceFilter;

    /**
     * @var EntityCollection $lotSizeFilter
     */
    private EntityCollection $lotSizeFilter;

    public function __construct(array $data)
    {
        $leverageFilterCollection = new EntityCollection();
        $priceFilterCollection = new EntityCollection();
        $lotSizeFilterCollection = new EntityCollection();

        if (!empty($data['priceFilter'])) {
            array_map(function ($priceFilter) use ($priceFilterCollection) {
                $priceFilterCollection->push(ResponseDtoBuilder::make(PriceFilterItemResponse::class, $priceFilter));
            }, [$data['priceFilter']]);
        }

        if (!empty($data['leverageFilter'])) {
            array_map(function ($leverageFilterItem) use ($leverageFilterCollection) {
                $leverageFilterCollection->push(ResponseDtoBuilder::make(LeverageFilterItemResponse::class, $leverageFilterItem));
            }, [$data['leverageFilter']]);
        }

        if (!empty($data['lotSizeFilter'])) {
            array_map(function ($lotSizeFilterItem) use ($lotSizeFilterCollection) {
                $lotSizeFilterCollection->push(ResponseDtoBuilder::make(LotSizeFilterItemResponse::class, $lotSizeFilterItem));
            }, [$data['lotSizeFilter']]);
        }

        $this
            ->setSymbol($data['symbol'])
            ->setContractType($data['contractType'] ?? null)
            ->setStatus($data['status'])
            ->setBaseCoin($data['baseCoin'])
            ->setQuoteCoin($data['quoteCoin'])
            ->setLaunchTime($data['launchTime'])
            ->setDeliveryTime($data['deliveryTime'])
            ->setDeliveryFeeRate((float)$data['deliveryFeeRate'])
            ->setPriceScale($data['priceScale'] ?? 0.0)
            ->setUnifiedMarginTrade((bool)$data['unifiedMarginTrade'])
            ->setFundingInterval((int)$data['fundingInterval'])
            ->setSettleCoin($data['settleCoin'])
            ->setLeverageFilter($leverageFilterCollection)
            ->setPriceFilter($priceFilterCollection)
            ->setLotSizeFilter($lotSizeFilterCollection);
    }

    /**
     * @return EntityCollection
     */
    public function getLotSizeFilter(): EntityCollection
    {
        return $this->lotSizeFilter;
    }

    /**
     * @param EntityCollection $lotSizeFilter
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setLotSizeFilter(EntityCollection $lotSizeFilter): self
    {
        $this->lotSizeFilter = $lotSizeFilter;
        return $this;
    }

    /**
     * @return EntityCollection
     */
    public function getPriceFilter(): EntityCollection
    {
        return $this->priceFilter;
    }

    /**
     * @param EntityCollection $priceFilter
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setPriceFilter(EntityCollection $priceFilter): self
    {
        $this->priceFilter = $priceFilter;
        return $this;
    }

    /**
     * @param EntityCollection $leverageFilter
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setLeverageFilter(EntityCollection $leverageFilter): self
    {
        $this->leverageFilter = $leverageFilter;
        return $this;
    }

    /**
     * @return EntityCollection
     */
    public function getLeverageFilter(): EntityCollection
    {
        return $this->leverageFilter;
    }

    /**
     * @param string|null $settleCoin
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setSettleCoin(?string $settleCoin): self
    {
        $this->settleCoin = $settleCoin;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSettleCoin(): ?string
    {
        return $this->settleCoin;
    }

    /**
     * @param int $fundingInterval
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setFundingInterval(int $fundingInterval): self
    {
        $this->fundingInterval = $fundingInterval;
        return $this;
    }

    /**
     * @return int
     */
    public function getFundingInterval(): int
    {
        return $this->fundingInterval;
    }

    /**
     * @return bool
     */
    public function getUnifiedMarginTrade(): bool
    {
        return $this->unifiedMarginTrade;
    }

    /**
     * @param bool $unifiedMarginTrade
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setUnifiedMarginTrade(?bool $unifiedMarginTrade): self
    {
        $this->unifiedMarginTrade = $unifiedMarginTrade;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceScale(): float
    {
        return $this->priceScale;
    }

    /**
     * @param float $priceScale
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setPriceScale(?float $priceScale): self
    {
        $this->priceScale = $priceScale;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryFeeRate(): float
    {
        return $this->deliveryFeeRate;
    }

    /**
     * @param float $deliveryFeeRate
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setDeliveryFeeRate(float $deliveryFeeRate): self
    {
        $this->deliveryFeeRate = $deliveryFeeRate;
        return $this;
    }

    /**
     * The delivery timestamp (ms). "0" for perpetual
     * @param int $deliveryTime
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setDeliveryTime(int $deliveryTime): self
    {
        $this->deliveryTime = null;
        if ($deliveryTime > 0) {
            $this->deliveryTime = DateTimeHelper::makeFromTimestamp($deliveryTime);
        }
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDeliveryTime(): ?DateTime
    {
        return $this->deliveryTime;
    }

    /**
     * @param int $launchTime
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setLaunchTime(int $launchTime): self
    {
        $this->launchTime = DateTimeHelper::makeFromTimestamp($launchTime);
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLaunchTime(): ?\DateTime
    {
        return $this->launchTime;
    }

    /**
     * @return string|null
     */
    public function getQuoteCoin(): ?string
    {
        return $this->quoteCoin;
    }

    /**
     * @param string|null $quoteCoin
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setQuoteCoin(?string $quoteCoin): self
    {
        $this->quoteCoin = $quoteCoin;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBaseCoin(): ?string
    {
        return $this->baseCoin;
    }

    /**
     * @param string|null $baseCoin
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setBaseCoin(?string $baseCoin): self
    {
        $this->baseCoin = $baseCoin;
        return $this;
    }

    /**
     * @param string|null $symbol
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setSymbol(?string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    /**
     * Contract type. `LinearPerpetual`, `InversePerpetual`, `InverseFutures`
     * @param string|null $contractType
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setContractType(?string $contractType): self
    {
        $this->contractType = $contractType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContractType(): ?string
    {
        return $this->contractType;
    }

    /**
     * @param string|null $status
<<<<<<<< HEAD:src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoResponse.php
     * @return InstrumentInfoResponse
========
     * @return InstrumentInfoAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/InstrumentInfo/Response/InstrumentInfoAbstractResponse.php
     */
    private function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
}