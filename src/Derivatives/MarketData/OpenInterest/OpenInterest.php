<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestAbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequestOptions;

class OpenInterest extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/open-interest";
    }

    public function getRequestClassname(): string
    {
        return OpenInterestRequestOptions::class;
    }

    protected function getResponseClassname(): string
    {
        return OpenInterestAbstractResponse::class;
    }
}