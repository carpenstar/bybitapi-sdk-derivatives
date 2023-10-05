<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setOrderId(string $orderId): self;
    public function setStartTime(int $startTime): self;
    public function setEndTime(int $endTime): self;
    public function setExecType(string $execType): self;
    public function setLimit(int $limit): self;
    public function setCursor(string $cursor): self;
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getStartTime(): \DateTime;
    public function getEndTime(): \DateTime;
    public function getExecType(): string;
    public function getLimit(): int;
    public function getCursor(): string;
}