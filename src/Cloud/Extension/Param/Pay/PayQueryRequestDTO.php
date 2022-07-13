<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 *  
 * @author Baymax
 * @create Mon Mar 14 17:42:06 CST 2022
 */
class PayQueryRequestDTO implements \JsonSerializable {

    /**
     * 外部支付单号，和有赞支付单号二选一，不能同时为空
     * @var string
     */
    private $tradeNo;

    /**
     * 有赞支付单号，和外部支付单号二选一，不能同时为空
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
    public function getTradeNo(): ?string
    {
        return $this->tradeNo;
    }

    /**
     * @param string $tradeNo
     */
    public function setTradeNo(?string $tradeNo): void
    {
        $this->tradeNo = $tradeNo;
    }

    /**
     * @return string
     */
    public function getYzTradeNo(): ?string
    {
        return $this->yzTradeNo;
    }

    /**
     * @param string $yzTradeNo
     */
    public function setYzTradeNo(?string $yzTradeNo): void
    {
        $this->yzTradeNo = $yzTradeNo;
    }

    /**
     * @return string
     */
    public function getMchId(): ?string
    {
        return $this->mchId;
    }

    /**
     * @param string $mchId
     */
    public function setMchId(?string $mchId): void
    {
        $this->mchId = $mchId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}