<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;

/**
 *  
 * @author Baymax
 * @create Wed Feb 22 11:08:30 CST 2023
 */
class VlaueCardExtBillRecordDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单号
     * @var string
     */
    private $bizDetailNo;

    /**
     * 资金流向
     * @var string
     */
    private $fundFlow;

    /**
     * 业务类型
     * @var string
     */
    private $bizType;

    /**
     * 交易时间（毫秒）
     * @var int
     */
    private $tradeTime;

    /**
     * 操作总金额，单位分
     * @var string
     */
    private $amount;

    /**
     * 操作赠送金金额，单位分
     * @var string
     */
    private $bonusAmount;

    /**
     * 操作后卡内余额,单元分
     * @var string
     */
    private $currentDenomination;

    /**
     * 操作后赠送金余额，单位分
     * @var string
     */
    private $currentBonusDenomination;

    /**
     * 汇总卡号
     * @var string
     */
    private $cardNo;

    /**
     * 用户手机号码
     * @var string
     */
    private $userPhone;



    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getBizDetailNo(): ?string
    {
        return $this->bizDetailNo;
    }

    /**
     * @param string $bizDetailNo
     */
    public function setBizDetailNo(?string $bizDetailNo): void
    {
        $this->bizDetailNo = $bizDetailNo;
    }

    /**
     * @return string
     */
    public function getFundFlow(): ?string
    {
        return $this->fundFlow;
    }

    /**
     * @param string $fundFlow
     */
    public function setFundFlow(?string $fundFlow): void
    {
        $this->fundFlow = $fundFlow;
    }

    /**
     * @return string
     */
    public function getBizType(): ?string
    {
        return $this->bizType;
    }

    /**
     * @param string $bizType
     */
    public function setBizType(?string $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return int
     */
    public function getTradeTime(): ?int
    {
        return $this->tradeTime;
    }

    /**
     * @param int $tradeTime
     */
    public function setTradeTime(?int $tradeTime): void
    {
        $this->tradeTime = $tradeTime;
    }

    /**
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getBonusAmount(): ?string
    {
        return $this->bonusAmount;
    }

    /**
     * @param string $bonusAmount
     */
    public function setBonusAmount(?string $bonusAmount): void
    {
        $this->bonusAmount = $bonusAmount;
    }

    /**
     * @return string
     */
    public function getCurrentDenomination(): ?string
    {
        return $this->currentDenomination;
    }

    /**
     * @param string $currentDenomination
     */
    public function setCurrentDenomination(?string $currentDenomination): void
    {
        $this->currentDenomination = $currentDenomination;
    }

    /**
     * @return string
     */
    public function getCurrentBonusDenomination(): ?string
    {
        return $this->currentBonusDenomination;
    }

    /**
     * @param string $currentBonusDenomination
     */
    public function setCurrentBonusDenomination(?string $currentBonusDenomination): void
    {
        $this->currentBonusDenomination = $currentBonusDenomination;
    }

    /**
     * @return string
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return string
     */
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(?string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}