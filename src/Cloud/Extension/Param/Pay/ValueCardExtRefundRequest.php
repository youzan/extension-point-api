<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 * 
 * @author Baymax
 * @create Fri Nov 22 15:16:11 CST 2019
 */
class ValueCardExtRefundRequest implements \JsonSerializable {

    /**
     * 收单号
     * @var string
     */
    private $acquireNo;

    /**
     * 收单系统上层业务系统单据号,通常为E单号
     * @var string
     */
    private $orderNo;

    /**
     * 退款对应的支付明细号
     * @var string
     */
    private $payDetailNo;

    /**
     * 退款明细号
     * @var string
     */
    private $refundDetailNo;

    /**
     * 订单总金额，单位为分，只能为整数，单位（分）
     * @var int
     */
    private $totalAmount;

    /**
     * 退款总金额，单位为分，只能为整数，可部分退款，单位（分）
     * @var int
     */
    private $refundAmount;

    /**
     * 退款发起时间
     * @var int
     */
    private $tradeTime;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getAcquireNo(): string
    {
        return $this->acquireNo;
    }

    /**
     * @param string $acquireNo
     */
    public function setAcquireNo(string $acquireNo): void
    {
        $this->acquireNo = $acquireNo;
    }

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
    public function getPayDetailNo(): string
    {
        return $this->payDetailNo;
    }

    /**
     * @param string $payDetailNo
     */
    public function setPayDetailNo(string $payDetailNo): void
    {
        $this->payDetailNo = $payDetailNo;
    }

    /**
     * @return string
     */
    public function getRefundDetailNo(): string
    {
        return $this->refundDetailNo;
    }

    /**
     * @param string $refundDetailNo
     */
    public function setRefundDetailNo(string $refundDetailNo): void
    {
        $this->refundDetailNo = $refundDetailNo;
    }

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     */
    public function setTotalAmount(int $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return int
     */
    public function getRefundAmount(): int
    {
        return $this->refundAmount;
    }

    /**
     * @param int $refundAmount
     */
    public function setRefundAmount(int $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
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
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}