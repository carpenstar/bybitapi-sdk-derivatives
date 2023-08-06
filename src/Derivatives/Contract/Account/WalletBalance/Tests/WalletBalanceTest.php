<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Tests;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Builders\ResponseHandlerBuilder;
use Carpenstar\ByBitAPI\Core\Builders\RestBuilder;
use Carpenstar\ByBitAPI\Core\Enums\EnumOutputMode;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseDto;
use Carpenstar\ByBitAPI\Core\Response\CurlResponseHandler;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Overrides\TestWalletBalance;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponse;
use PHPUnit\Framework\TestCase;

class WalletBalanceTest extends TestCase
{
    static private string $walletBalanceResponse = '{"retCode":0,"retMsg":"OK","result":{"list":[{"coin":"USDC","equity":"1259.7788251","walletBalance":"1259.7488251","positionMargin":"1259.7788251","availableBalance":"1246.7387871","orderMargin":"0","occClosingFee":"0","occFundingFee":"0","unrealisedPnl":"0.03","cumRealisedPnl":"26.6561752","givenCash":"0","serviceCash":"0","accountIM":"13.040038","accountMM":"1.367038"}]},"retExtInfo":{},"time":1670923631261}';

    public function testWalletBalanceDTOBuilder()
    {
        foreach (json_decode(self::$walletBalanceResponse, true)['result']["list"] as $feeRate) {
            $dto = ResponseDtoBuilder::make(WalletBalanceResponse::class, $feeRate);
            $this->assertInstanceOf(WalletBalanceResponse::class, $dto);
        }
    }

    public function testWalletBalanceResponseHandlerBuilder()
    {
        $handler = ResponseHandlerBuilder::make(self::$walletBalanceResponse, CurlResponseHandler::class, WalletBalanceResponse::class);
        $this->assertInstanceOf(EntityCollection::class, $handler->getBody());
        $this->assertGreaterThan(0, $handler->getBody()->count());
    }

    public function testWalletBalanceEndpoint()
    {
        $endpoint = RestBuilder::make(TestWalletBalance::class);

        $entityResponse = $endpoint->execute(EnumOutputMode::MODE_ENTITY, self::$walletBalanceResponse);

        $this->assertInstanceOf(CurlResponseDto::class, $entityResponse);
        $body = $entityResponse->getBody();
        $this->assertInstanceOf(EntityCollection::class, $body);

        foreach ($body->fetch() as $wallet) {
            $dto = ResponseDtoBuilder::make(WalletBalanceResponse::class, $wallet);
            $this->assertInstanceOf(WalletBalanceResponse::class, $dto);
        }
    }
}