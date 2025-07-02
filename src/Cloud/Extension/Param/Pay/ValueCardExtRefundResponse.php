<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 * 返回参数
 * @author Baymax
 * @create Tue Oct 22 15:22:03 CST 2024
 */
class ValueCardExtRefundResponse implements \JsonSerializable {

    /**
     * 退款状态
     * @var int
     */
    private $refundStatus;

    /**
     * 退款单明细号
     * @var string
     */
    private $refundDetailNo;

    /**
     * 外部渠道退款单据号
     * @var string
     */
    private $refundChannelNo;

    /**
     * 退款完成时间
     * @var int
     */
    private $refundDt;

    /**
     * 订单的储值余额本金金额,只能为整数，单位（分）
     * @var int
     */
    private $balancePrincipal;

    /**
     * 订单的储值余额赠送金金额,只能为整数，单位（分）
     * @var int
     */
    private $balanceBonus;

    /**
     * 订单的礼品卡本金金额,只能为整数，单位（分）
     * @var int
     */
    private $giftCardPrincipal;

    /**
     * 订单的礼品卡赠送金金额,只能为整数，单位（分）
     * @var int
     */
    private $giftCardBonus;



    /**
     * @return int
     */
    public function getRefundStatus(): ?int
    {
        return $this->refundStatus;
    }

    /**
     * @param int $refundStatus
     */
    public function setRefundStatus(?int $refundStatus): void
    {
        $this->refundStatus = $refundStatus;
    }

    /**
     * @return string
     */
    public function getRefundDetailNo(): ?string
    {
        return $this->refundDetailNo;
    }

    /**
     * @param string $refundDetailNo
     */
    public function setRefundDetailNo(?string $refundDetailNo): void
    {
        $this->refundDetailNo = $refundDetailNo;
    }

    /**
     * @return string
     */
    public function getRefundChannelNo(): ?string
    {
        return $this->refundChannelNo;
    }

    /**
     * @param string $refundChannelNo
     */
    public function setRefundChannelNo(?string $refundChannelNo): void
    {
        $this->refundChannelNo = $refundChannelNo;
    }

    /**
     * @return int
     */
    public function getRefundDt(): ?int
    {
        return $this->refundDt;
    }

    /**
     * @param int $refundDt
     */
    public function setRefundDt(?int $refundDt): void
    {
        $this->refundDt = $refundDt;
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