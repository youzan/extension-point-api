<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-05-05 16:35:58.0
 */
class ValueCardRefundQueryRequestDTO implements \JsonSerializable {

    /**
     * 支付渠道单据号,渠道返回的单号
     * @var string
     */
    private $payChannelNo;

    /**
     * 退款对应的支付单明细号
     * @var string
     */
    private $payOrderNo;

    /**
     * 退款单明细号
     * @var string
     */
    private $refundOrderNo;



    /**
     * @return string
     */
    public function getPayChannelNo(): string
    {
        return $this->payChannelNo;
    }

    /**
     * @param string $payChannelNo
     */
    public function setPayChannelNo(string $payChannelNo): void
    {
        $this->payChannelNo = $payChannelNo;
    }

    /**
     * @return string
     */
    public function getPayOrderNo(): string
    {
        return $this->payOrderNo;
    }

    /**
     * @param string $payOrderNo
     */
    public function setPayOrderNo(string $payOrderNo): void
    {
        $this->payOrderNo = $payOrderNo;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}