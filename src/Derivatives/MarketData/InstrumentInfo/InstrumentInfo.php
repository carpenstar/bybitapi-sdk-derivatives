<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumDerivativesCategory;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Dto\InstrumentInfoOptionDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Options\InstrumentInfoOptions;

/**
 * Get launched instruments information.
 * https://bybit-exchange.github.io/docs/derivatives/public/instrument-info
 */
class InstrumentInfo extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = '/derivatives/v3/public/instruments-info';

    public function getQueryBagClassName(): string
    {
        return InstrumentInfoOptions::class;
    }

    /**
     * @return string
     */
    protected function getResponseEntityClassName(): string
    {
        switch ($this->getParameters()->getCategory()) {
            case EnumDerivativesCategory::CATEGORY_PRODUCT_OPTION:
                return InstrumentInfoOptionDto::class;
        }

        return get_class($this) . "Response";
    }

}