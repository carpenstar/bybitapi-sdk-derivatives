<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\ResponseEntity;

class OpenInterestResponse extends ResponseEntity
{
    /**
     * Open interest
     * @var string $openInterest
     */
    private string $openInterest;

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
     * @param string $openInterest
     * @return OpenInterestResponse
     */
    public function setOpenInterest(string $openInterest): self
    {
        $this->openInterest = $openInterest;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenInterest(): string
    {
        return $this->openInterest;
    }

    /**
     * @param int $timestamp
     * @return OpenInterestResponse
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