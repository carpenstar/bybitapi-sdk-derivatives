<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumDerivativesCategory;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Dto\TickerInfoDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Dto\TickerInfoLinearOptionDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Options\TickerInfoOptions;

class TickerInfo extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/tickers";

    public function getQueryBagClassName(): string
    {
        return TickerInfoOptions::class;
    }

    protected function getResponseEntityClassName(): string
    {
        switch ($this->getParameters()->getCategory()) {
            case EnumDerivativesCategory::CATEGORY_PRODUCT_OPTION:
                return TickerInfoLinearOptionDto::class;
        }

        return TickerInfoDto::class;
    }

}