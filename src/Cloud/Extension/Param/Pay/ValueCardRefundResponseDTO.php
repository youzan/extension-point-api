<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-04-22 18:07:50.0
 */
class ValueCardRefundResponseDTO implements \JsonSerializable {

    /**
     * 退款状态
     * @var string
     */
    private $refundStatus;

    /**
     * 退款单明细号
     * @var string
     */
    private $refundOrderNo;

    /**
     * 退款支付工具返回单号
     * @var string
     */
    private $refundChannelNo;

    /**
     * 退款完成时间
     * @var int
     */
    private $refundDt;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $bizContext;



    /**
     * @return string
     */
    public function getRefundStatus(): string
    {
        return $this->refundStatus;
    }

    /**
     * @param string $refundStatus
     */
    public function setRefundStatus(string $refundStatus): void
    {
        $this->refundStatus = $refundStatus;
    }

    /**
     * @return string
     */
    public function getRefundOrderNo(): string
    {
        return $this->refundOrderNo;
    }

    /**
     * @param string $refundOrderNo
     */
    public function setRefundOrderNo(string $refundOrderNo): void
    {
        $this->refundOrderNo = $refundOrderNo;
    }

    /**
     * @return string
     */
    public function getRefundChannelNo(): string
    {
        return $this->refundChannelNo;
    }

    /**
     * @param string $refundChannelNo
     */
    public function setRefundChannelNo(string $refundChannelNo): void
    {
        $this->refundChannelNo = $refundChannelNo;
    }

    /**
     * @return int
     */
    public function getRefundDt(): int
    {
        return $this->refundDt;
    }

    /**
     * @param int $refundDt
     */
    public function setRefundDt(int $refundDt): void
    {
        $this->refundDt = $refundDt;
    }

    /**
     * @return stdClass
     */
    public function getBizContext(): stdClass
    {
        return $this->bizContext;
    }

    /**
     * @param stdClass $bizContext
     */
    public function setBizContext(stdClass $bizContext): void
    {
        $this->bizContext = $bizContext;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}