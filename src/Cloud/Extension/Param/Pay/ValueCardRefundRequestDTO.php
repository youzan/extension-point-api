<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-04-22 18:07:50.0
 */
class ValueCardRefundRequestDTO implements \JsonSerializable {

    /**
     * 支付渠道单据号,渠道返回的单号
     * @var string
     */
    private $payChannelNo;

    /**
     * 退款对应的支付明细号
     * @var string
     */
    private $payOrderNo;

    /**
     * 退款明细号
     * @var string
     */
    private $refundOrderNo;

    /**
     * 订单总金额，单位为分，只能为整数
     * @var int
     */
    private $totalAmount;

    /**
     * 退款总金额，单位为分，只能为整数，可部分退款
     * @var int
     */
    private $refundAmount;

    /**
     * 退款发起时间
     * @var int
     */
    private $tradeTime;

    /**
     * 业务透传上下文
     * @var stdClass
     */
    private $outBizContext;



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
     * @return stdClass
     */
    public function getOutBizContext(): stdClass
    {
        return $this->outBizContext;
    }

    /**
     * @param stdClass $outBizContext
     */
    public function setOutBizContext(stdClass $outBizContext): void
    {
        $this->outBizContext = $outBizContext;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}