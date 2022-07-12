<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 * 返回参数
 * @author Baymax
 * @create Mon Mar 14 19:29:34 CST 2022
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}