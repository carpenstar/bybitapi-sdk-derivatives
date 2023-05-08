<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

use Carpenstar\ByBitAPI\Core\Builders\ResponseBuilder;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Interfaces\ICollectionInterface;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;
use DateTime;

class InstrumentInfoOptionResponse extends ResponseEntity
{
    /**
     * @var string $category
     */
    private string $category;

    /**
     * @var string $symbol
     */
    private string $symbol;

    /**
     * @var string $status
     */
    private string $status;

    /**
     * @var string $baseCoin
     */
    private string $baseCoin;

    /**
     * @var string $quoteCoin
     */
    private string $quoteCoin;

    /**
     * @var string $settleCoin
     */
    private string $settleCoin;

    /**
     * @var string $optionsType
     */
    private string $optionsType;

    /**
     * @var DateTime $launchTime
     */
    private \DateTime $launchTime;

    /**
     * @var \DateTime $deliveryTime
     */
    private DateTime $deliveryTime;

    /**
     * @var float $deliveryFeeRate
     */
    private float $deliveryFeeRate;

    /**
     * @var ICollectionInterface $priceFilter
     */
    private ICollectionInterface $priceFilter;

    /**
     * @var ICollectionInterface $lotSizeFilter
     */
    private ICollectionInterface $lotSizeFilter;

    public function __construct(array $data)
    {
        $priceFilterCollection = new EntityCollection();
        $lotSizeFilterCollection = new EntityCollection();

        $this
            ->setCategory($data['category'])
            ->setSymbol($data['symbol'])
            ->setStatus($data['status'])
            ->setBaseCoin($data['baseCoin'])
            ->setQuoteCoin($data['quoteCoin'])
            ->setSettleCoin($data['settleCoin'])
            ->setOptionsType($data['optionsType'])
            ->setLaunchTime($data['launchTime'])
            ->setDeliveryTime($data['deliveryTime'])
            ->setDeliveryFreeRate($data['deliveryFeeRate']);

        if (!empty($data['priceFilter'])) {
            array_map(function ($priceFilter) use ($priceFilterCollection) {
                $priceFilterCollection->push(ResponseBuilder::make(PriceFilterItem::class, $priceFilter));
            }, [$data['priceFilter']]);
        }

        if (!empty($data['lotSizeFilter'])) {
            array_map(function ($lotSizeFilterItem) use ($lotSizeFilterCollection) {
                $lotSizeFilterCollection->push(ResponseBuilder::make(LotSizeFilterItem::class, $lotSizeFilterItem));
            }, [$data['lotSizeFilter']]);
        }

        $this->setPriceFilter($priceFilterCollection);
        $this->setLotSizeFilter($lotSizeFilterCollection);

    }

    /**
     * @param string $category
     * @return $this
     */
    private function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return $this
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
     * @param string $status
     * @return $this
     */
    private function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $baseCoin
     * @return $this
     */
    private function setBaseCoin(string $baseCoin): self
    {
        $this->baseCoin = $baseCoin;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCoin(): string
    {
        return $this->baseCoin;
    }

    /**
     * @param string $quoteCoin
     * @return $this
     */
    private function setQuoteCoin(string $quoteCoin): self
    {
        $this->quoteCoin = $quoteCoin;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteCoin(): string
    {
        return $this->quoteCoin;
    }

    /**
     * @param string $settleCoin
     * @return $this
     */
    private function setSettleCoin(string $settleCoin): self
    {
        $this->settleCoin = $settleCoin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettleCoin(): string
    {
        return $this->settleCoin;
    }

    /**
     * @param string $optionsType
     * @return $this
     */
    private function setOptionsType(string $optionsType): self
    {
        $this->optionsType = $optionsType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptionsType(): string
    {
        return $this->optionsType;
    }

    /**
     * @param string $launchTime
     * @return $this
     */
    private function setLaunchTime(string $launchTime): self
    {
        $this->launchTime = DateTimeHelper::makeFromTimestamp($launchTime);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLaunchTime(): \DateTime
    {
        return $this->launchTime;
    }

    /**
     * @param string $deliveryTime
     * @return $this
     */
    private function setDeliveryTime(string $deliveryTime): self
    {
        $this->deliveryTime = DateTimeHelper::makeFromTimestamp($deliveryTime);
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryTime(): DateTime
    {
        return $this->deliveryTime;
    }

    /**
     * @param float $deliveryFreeRate
     * @return $this
     */
    private function setDeliveryFreeRate(float $deliveryFreeRate): self
    {
        $this->deliveryFeeRate = $deliveryFreeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryFreeRate(): float
    {
        return $this->deliveryFeeRate;
    }

    /**
     * @param ICollectionInterface $collection
     * @return $this
     */
    private function setPriceFilter(ICollectionInterface $collection): self
    {
        $this->priceFilter = $collection;
        return $this;
    }

    /**
     * @return ICollectionInterface
     */
    public function getPriceFilter(): ICollectionInterface
    {
        return $this->priceFilter;
    }

    /**
     * @param ICollectionInterface $collection
     * @return $this
     */
    private function setLotSizeFilter(ICollectionInterface $collection): self
    {
        $this->lotSizeFilter = $collection;
        return $this;
    }

    /**
     * @return ICollectionInterface
     */
    public function getLotSizeFilter(): ICollectionInterface
    {
        return $this->lotSizeFilter;
    }
}