<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;

class OpenInterestResponse extends AbstractResponse
{
    /**
     * Open interest
     * @var float $openInterest
     */
    private float $openInterest;

    /**
     * The timestamp
     * @var \DateTime $timestamp
     */
    private \DateTime $timestamp;

    public function __construct(array $data)
    {
        $this
            ->setOpenInterest($data['openInterest'])
            ->setTimestamp($data['timestamp']);
    }

    /**
     * @param float $openInterest
     * @return OpenInterestResponse
     */
    public function setOpenInterest(float $openInterest): self
    {
        $this->openInterest = $openInterest;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpenInterest(): float
    {
        return $this->openInterest;
    }

    /**
     * @param int $timestamp
     * @return self
     */
    private function setTimestamp(int $timestamp): self
    {
        $this->timestamp = DateTimeHelper::makeFromTimestamp($timestamp);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }


}