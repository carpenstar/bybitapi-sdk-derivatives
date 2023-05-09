<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Dto\OpenInterestDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Options\OpenInterestOptions;

class OpenInterest extends PublicEndpoint implements IGetEndpointInterface
{
    protected string $url = "/derivatives/v3/public/open-interest";

    public function getRequestOptionsDTOClass(): string
    {
        return OpenInterestOptions::class;
    }

    protected function getResponseDTOClass(): string
    {
        return OpenInterestDto::class;
    }
}