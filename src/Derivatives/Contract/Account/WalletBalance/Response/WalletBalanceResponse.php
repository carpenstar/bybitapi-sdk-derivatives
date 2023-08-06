<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;

class WalletBalanceResponse extends AbstractResponse implements IWalletBalanceResponseInterface
{
    private string $coin;
    private float $equity;
    private float $walletBalance;
    private float $positionMargin;
    private float $availableBalance;
    private float $orderMargin;
    private float $occClosingFee;
    private float $occFundingFee;
    private float $unrealisedPnl;
    private float $cumRealisedPnl;
    private float $givenCash;
    private float $serviceCash;
    private string $accountIM;
    private string $accountMM;

    public function __construct(array $data)
    {
        $this
            ->setCoin($data['coin'])
            ->setEquity($data['equity'])
            ->setWalletBalance($data['walletBalance'])
            ->setPositionMargin($data['positionMargin'])
            ->setAvailableBalance($data['availableBalance'])
            ->setOrderMargin($data['orderMargin'])
            ->setOccClosingFee($data['occClosingFee'])
            ->setOccFundingFee($data['occFundingFee'])
            ->setUnrealisedPnl($data['unrealisedPnl'])
            ->setCumRealisedPnl($data['cumRealisedPnl'])
            ->setGivenCash($data['givenCash'])
            ->setServiceCash($data['serviceCash'])
            ->setAccountIM($data['accountIM'])
            ->setAccountMM($data['accountMM']);
    }

    /**
     * @param string $coin
     * @return WalletBalanceResponse
     */
    private function setCoin(string $coin): self
    {
        $this->coin = $coin;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoin(): string
    {
        return $this->coin;
    }

    /**
     * @param float $equity
     * @return WalletBalanceResponse
     */
    private function setEquity(float $equity): self
    {
        $this->equity = $equity;
        return $this;
    }

    /**
     * @return float
     */
    public function getEquity(): float
    {
        return $this->equity;
    }

    /**
     * @param float $walletBalance
     * @return WalletBalanceResponse
     */
    private function setWalletBalance(float $walletBalance): self
    {
        $this->walletBalance = $walletBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getWalletBalance(): float
    {
        return $this->walletBalance;
    }

    /**
     * @param float $positionMargin
     * @return WalletBalanceResponse
     */
    private function setPositionMargin(float $positionMargin): self
    {
        $this->positionMargin = $positionMargin;
        return $this;
    }

    /**
     * @return float
     */
    public function getPositionMargin(): float
    {
        return $this->positionMargin;
    }

    /**
     * @param float $availableBalance
     * @return WalletBalanceResponse
     */
    private function setAvailableBalance(float $availableBalance): self
    {
        $this->availableBalance = $availableBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvailableBalance(): float
    {
        return $this->availableBalance;
    }

    /**
     * @param float $orderMargin
     * @return WalletBalanceResponse
     */
    public function setOrderMargin(float $orderMargin): self
    {
        $this->orderMargin = $orderMargin;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderMargin(): float
    {
        return $this->orderMargin;
    }

    /**
     * @param float $occClosingFee
     * @return WalletBalanceResponse
     */
    private function setOccClosingFee(float $occClosingFee): self
    {
        $this->occClosingFee = $occClosingFee;
        return $this;
    }

    /**
     * @return float
     */
    public function getOccClosingFee(): float
    {
        return $this->occClosingFee;
    }

    /**
     * @param float $occFundingFee
     * @return WalletBalanceResponse
     */
    private function setOccFundingFee(float $occFundingFee): self
    {
        $this->occFundingFee = $occFundingFee;
        return $this;
    }

    /**
     * @return float
     */
    public function getOccFundingFee(): float
    {
        return $this->occFundingFee;
    }

    /**
     * @param float $unrealisedPnl
     * @return WalletBalanceResponse
     */
    public function setUnrealisedPnl(float $unrealisedPnl): self
    {
        $this->unrealisedPnl = $unrealisedPnl;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnrealisedPnl(): float
    {
        return $this->unrealisedPnl;
    }

    /**
     * @param float $cumRealisedPnl
     * @return WalletBalanceResponse
     */
    private function setCumRealisedPnl(float $cumRealisedPnl): self
    {
        $this->cumRealisedPnl = $cumRealisedPnl;
        return $this;
    }

    /**
     * @return float
     */
    public function getCumRealisedPnl(): float
    {
        return $this->cumRealisedPnl;
    }

    /**
     * @param float $givenCash
     * @return WalletBalanceResponse
     */
    private function setGivenCash(float $givenCash): self
    {
        $this->givenCash = $givenCash;
        return $this;
    }

    /**
     * @return float
     */
    public function getGivenCash(): float
    {
        return $this->givenCash;
    }

    /**
     * @param float $serviceCash
     * @return WalletBalanceResponse
     */
    private function setServiceCash(float $serviceCash): self
    {
        $this->serviceCash = $serviceCash;
        return $this;
    }

    /**
     * @return float
     */
    public function getServiceCash(): float
    {
        return $this->serviceCash;
    }

    /**
     * @param string $accountIM
     * @return WalletBalanceResponse
     */
    private function setAccountIM(string $accountIM): self
    {
        $this->accountIM = $accountIM;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountIM(): string
    {
        return $this->accountIM;
    }

    /**
     * @param string $accountMM
     * @return WalletBalanceResponse
     */
    public function setAccountMM(string $accountMM): self
    {
        $this->accountMM = $accountMM;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountMM(): string
    {
        return $this->accountMM;
    }
}