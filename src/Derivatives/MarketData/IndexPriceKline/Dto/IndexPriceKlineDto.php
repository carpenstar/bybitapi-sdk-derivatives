<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Dto;

use Carpenstar\ByBitAPI\Core\Builders\ResponseBuilder;
use Carpenstar\ByBitAPI\Core\Interfaces\ICollectionInterface;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class IndexPriceKlineDto extends ResponseEntity
{
    /**
     * @var string $symbol
     */
    private string $symbol;

    /**
     * @var string $category
     */
    private string $category;

    /**
     * @var ICollectionInterface $list
     */
    private ICollectionInterface $list;


    public function __construct(array $data)
    {
        $priceKlineList = new EntityCollection();

        $this
            ->setSymbol($data['symbol'])
            ->setCategory($data['category']);

        if (!empty($data['list'])) {
            array_map(function ($priceKlineItemData) use ($priceKlineList) {
                $priceKlineList->push(ResponseBuilder::make(IndexPriceKlineItemDto::class, $priceKlineItemData));
            }, [$data['list']]);
        }

        $this->setList($priceKlineList);
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
     * @param ICollectionInterface $list
     * @return $this
     */
    private function setList(ICollectionInterface $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return ICollectionInterface
     */
    public function getList(): ICollectionInterface
    {
        return $this->list;
    }
}