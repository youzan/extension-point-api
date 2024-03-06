<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtRefundOrderResponse;



/**
 * 金额明细-基于支付方式
 * @author Baymax
 * @create Wed Jan 31 11:10:21 CST 2024
 */
class AmountDetail implements \JsonSerializable {

    /**
     * 退款金额 不能为负数 单位：分  
     * @var int
     */
    private $amount;

    /**
     * 支付方式 目前仅支持传入 &quot;外部支付&quot;
     * @var string
     */
    private $payWay;



    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getPayWay(): ?string
    {
        return $this->payWay;
    }

    /**
     * @param string $payWay
     */
    public function setPayWay(?string $payWay): void
    {
        $this->payWay = $payWay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}