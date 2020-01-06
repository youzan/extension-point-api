<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2020-01-06 11:40:30.0
 */
class VlaueCardExtBillRecordDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var string
     */
    private $bizDetailNo;

    /**
     * 
     * @var string
     */
    private $fundFlow;

    /**
     * 
     * @var string
     */
    private $bizType;

    /**
     * 
     * @var int
     */
    private $tradeTime;

    /**
     * 
     * @var string
     */
    private $amount;

    /**
     * 
     * @var string
     */
    private $bonusAmount;

    /**
     * 
     * @var string
     */
    private $currentDenomination;

    /**
     * 
     * @var string
     */
    private $currentBonusDenomination;

    /**
     * 
     * @var string
     */
    private $cardNo;

    /**
     * 
     * @var string
     */
    private $userPhone;



    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getBizDetailNo(): string
    {
        return $this->bizDetailNo;
    }

    /**
     * @param string $bizDetailNo
     */
    public function setBizDetailNo(string $bizDetailNo): void
    {
        $this->bizDetailNo = $bizDetailNo;
    }

    /**
     * @return string
     */
    public function getFundFlow(): string
    {
        return $this->fundFlow;
    }

    /**
     * @param string $fundFlow
     */
    public function setFundFlow(string $fundFlow): void
    {
        $this->fundFlow = $fundFlow;
    }

    /**
     * @return string
     */
    public function getBizType(): string
    {
        return $this->bizType;
    }

    /**
     * @param string $bizType
     */
    public function setBizType(string $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return int
     */
    public function getTradeTime(): int
    {
        return $this->tradeTime;
    }

    /**
     * @param int $tradeTime
     */
    public function setTradeTime(int $tradeTime): void
    {
        $this->tradeTime = $tradeTime;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getBonusAmount(): string
    {
        return $this->bonusAmount;
    }

    /**
     * @param string $bonusAmount
     */
    public function setBonusAmount(string $bonusAmount): void
    {
        $this->bonusAmount = $bonusAmount;
    }

    /**
     * @return string
     */
    public function getCurrentDenomination(): string
    {
        return $this->currentDenomination;
    }

    /**
     * @param string $currentDenomination
     */
    public function setCurrentDenomination(string $currentDenomination): void
    {
        $this->currentDenomination = $currentDenomination;
    }

    /**
     * @return string
     */
    public function getCurrentBonusDenomination(): string
    {
        return $this->currentBonusDenomination;
    }

    /**
     * @param string $currentBonusDenomination
     */
    public function setCurrentBonusDenomination(string $currentBonusDenomination): void
    {
        $this->currentBonusDenomination = $currentBonusDenomination;
    }

    /**
     * @return string
     */
    public function getCardNo(): string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return string
     */
    public function getUserPhone(): string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}