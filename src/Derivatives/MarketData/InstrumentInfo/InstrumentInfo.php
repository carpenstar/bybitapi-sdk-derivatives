<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumDerivativesCategory;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;

class InstrumentInfo extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = '/derivatives/v3/public/instruments-info';

    public function getQueryBagClassName(): string
    {
        return IIQueryBag::class;
    }

    /**
     * @return string
     */
    protected function getResponseEntityClassName(): string
    {
        switch ($this->getParameters()->getCategory()) {
            case EnumDerivativesCategory::CATEGORY_PRODUCT_OPTION:
                return InstrumentInfoOptionResponse::class;
        }

        return get_class($this) . "Response";
    }

}