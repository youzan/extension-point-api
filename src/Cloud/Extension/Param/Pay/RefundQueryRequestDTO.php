<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-08-15 16:39:05.0
 */
class RefundQueryRequestDTO implements \JsonSerializable {

    /**
     * 商户号
     * @var string
     */
    private $mchId;

    /**
     * 有赞支付单号
     * @var string
     */
    private $yzTradeNo;

    /**
     * 外部支付单号
     * @var string
     */
    private $tradeNo;

    /**
     * 有赞退款单号
     * @var string
     */
    private $yzRefundNo;

    /**
     * 外部退款单号
     * @var string
     */
    private $refundNo;



    /**
     * @return string
     */
    public function getMchId(): string
    {
        return $this->mchId;
    }

    /**
     * @param string $mchId
     */
    public function setMchId(string $mchId): void
    {
        $this->mchId = $mchId;
    }

    /**
     * @return string
     */
    public function getYzTradeNo(): string
    {
        return $this->yzTradeNo;
    }

    /**
     * @param string $yzTradeNo
     */
    public function setYzTradeNo(string $yzTradeNo): void
    {
        $this->yzTradeNo = $yzTradeNo;
    }

    /**
     * @return string
     */
    public function getTradeNo(): string
    {
        return $this->tradeNo;
    }

    /**
     * @param string $tradeNo
     */
    public function setTradeNo(string $tradeNo): void
    {
        $this->tradeNo = $tradeNo;
    }

    /**
     * @return string
     */
    public function getYzRefundNo(): string
    {
        return $this->yzRefundNo;
    }

    /**
     * @param string $yzRefundNo
     */
    public function setYzRefundNo(string $yzRefundNo): void
    {
        $this->yzRefundNo = $yzRefundNo;
    }

    /**
     * @return string
     */
    public function getRefundNo(): string
    {
        return $this->refundNo;
    }

    /**
     * @param string $refundNo
     */
    public function setRefundNo(string $refundNo): void
    {
        $this->refundNo = $refundNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}