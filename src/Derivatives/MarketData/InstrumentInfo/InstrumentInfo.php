<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequestOptions;

/**
 * Get launched instruments information.
 * https://bybit-exchange.github.io/docs/derivatives/public/instrument-info
 */
class InstrumentInfo extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/instruments-info";
    }

    public function getOptionsClassname(): string
    {
        return InstrumentInfoRequestOptions::class;
    }

    /**
     * @return string
     */
    protected function getResponseClassname(): string
    {
        return InstrumentInfoResponse::class;
    }
}