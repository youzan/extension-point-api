<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-08-15 11:37:58.0
 */
class PayQueryRequestDTO implements \JsonSerializable {

    /**
     * 外部支付单号
     * @var string
     */
    private $tradeNo;

    /**
     * 有赞支付单号
     * @var string
     */
    private $yzTradeNo;

    /**
     * 商户号
     * @var string
     */
    private $mchId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}