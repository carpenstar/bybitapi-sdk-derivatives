<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;

class OpenInterestResponse extends AbstractResponse
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
<<<<<<<< HEAD:src/Derivatives/MarketData/OpenInterest/Response/OpenInterestResponse.php
     * @return OpenInterestResponse
========
     * @return OpenInterestAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/OpenInterest/Response/OpenInterestAbstractResponse.php
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
<<<<<<<< HEAD:src/Derivatives/MarketData/OpenInterest/Response/OpenInterestResponse.php
     * @return OpenInterestResponse
========
     * @return OpenInterestAbstractResponse
>>>>>>>> 4cd7e07 (Version v.3.0.0):src/Derivatives/MarketData/OpenInterest/Response/OpenInterestAbstractResponse.php
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