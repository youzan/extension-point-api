<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 *  
 * @author Baymax
 * @create Tue Oct 22 15:22:18 CST 2024
 */
class ValueCardExtPayResponse implements \JsonSerializable {

    /**
     * 支付明细号
     * @var string
     */
    private $payDetailNo;

    /**
     * 外部渠道支付单据号，业务方唯一凭证
     * @var string
     */
    private $payChannelNo;

    /**
     * 支付完成时间
     * @var int
     */
    private $paymentDt;

    /**
     * 实际支付金额，单位：分。实际支付金额&#x3D;实际支付本金+实际支付赠送金。
     * @var int
     */
    private $payAmount;

    /**
     * 实际支付本金，单位：分。（字段已废弃）
     * @var int
     */
    private $payPrincipalAmount;

    /**
     * 实际支付赠送金，单位：分。（字段已废弃）
     * @var int
     */
    private $payBonusAmount;

    /**
     * 支付状态   NOPAY: 未支付; SUCCESS: 成功; FAIL: 失败; PAYING: 支付中; UNKNOW: 未知(已废弃,不要传); CLOSED: 已经关闭
     * @var string
     */
    private $payStatus;

    /**
     * 订单的储值余额本金金额，只能为整数，单位（分）
     * @var int
     */
    private $balancePrincipal;

    /**
     * 订单的储值余额赠送金金额，只能为整数，单位（分）
     * @var int
     */
    private $balanceBonus;

    /**
     * 订单的礼品卡本金金额，只能为整数，单位（分）
     * @var int
     */
    private $giftCardPrincipal;

    /**
     * 订单的礼品卡赠送金金额，只能为整数，单位（分）
     * @var int
     */
    private $giftCardBonus;



    /**
     * @return string
     */
    public function getPayDetailNo(): ?string
    {
        return $this->payDetailNo;
    }

    /**
     * @param string $payDetailNo
     */
    public function setPayDetailNo(?string $payDetailNo): void
    {
        $this->payDetailNo = $payDetailNo;
    }

    /**
     * @return string
     */
    public function getPayChannelNo(): ?string
    {
        return $this->payChannelNo;
    }

    /**
     * @param string $payChannelNo
     */
    public function setPayChannelNo(?string $payChannelNo): void
    {
        $this->payChannelNo = $payChannelNo;
    }

    /**
     * @return int
     */
    public function getPaymentDt(): ?int
    {
        return $this->paymentDt;
    }

    /**
     * @param int $paymentDt
     */
    public function setPaymentDt(?int $paymentDt): void
    {
        $this->paymentDt = $paymentDt;
    }

    /**
     * @return int
     */
    public function getPayAmount(): ?int
    {
        return $this->payAmount;
    }

    /**
     * @param int $payAmount
     */
    public function setPayAmount(?int $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return int
     */
    public function getPayPrincipalAmount(): ?int
    {
        return $this->payPrincipalAmount;
    }

    /**
     * @param int $payPrincipalAmount
     */
    public function setPayPrincipalAmount(?int $payPrincipalAmount): void
    {
        $this->payPrincipalAmount = $payPrincipalAmount;
    }

    /**
     * @return int
     */
    public function getPayBonusAmount(): ?int
    {
        return $this->payBonusAmount;
    }

    /**
     * @param int $payBonusAmount
     */
    public function setPayBonusAmount(?int $payBonusAmount): void
    {
        $this->payBonusAmount = $payBonusAmount;
    }

    /**
     * @return string
     */
    public function getPayStatus(): ?string
    {
        return $this->payStatus;
    }

    /**
     * @param string $payStatus
     */
    public function setPayStatus(?string $payStatus): void
    {
        $this->payStatus = $payStatus;
    }

    /**
     * @return int
     */
    public function getBalancePrincipal(): ?int
    {
        return $this->balancePrincipal;
    }

    /**
     * @param int $balancePrincipal
     */
    public function setBalancePrincipal(?int $balancePrincipal): void
    {
        $this->balancePrincipal = $balancePrincipal;
    }

    /**
     * @return int
     */
    public function getBalanceBonus(): ?int
    {
        return $this->balanceBonus;
    }

    /**
     * @param int $balanceBonus
     */
    public function setBalanceBonus(?int $balanceBonus): void
    {
        $this->balanceBonus = $balanceBonus;
    }

    /**
     * @return int
     */
    public function getGiftCardPrincipal(): ?int
    {
        return $this->giftCardPrincipal;
    }

    /**
     * @param int $giftCardPrincipal
     */
    public function setGiftCardPrincipal(?int $giftCardPrincipal): void
    {
        $this->giftCardPrincipal = $giftCardPrincipal;
    }

    /**
     * @return int
     */
    public function getGiftCardBonus(): ?int
    {
        return $this->giftCardBonus;
    }

    /**
     * @param int $giftCardBonus
     */
    public function setGiftCardBonus(?int $giftCardBonus): void
    {
        $this->giftCardBonus = $giftCardBonus;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}