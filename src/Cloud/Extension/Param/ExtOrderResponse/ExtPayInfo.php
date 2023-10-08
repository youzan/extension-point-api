<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtOrderResponse;



/**
 * 支付信息
 * @author Baymax
 * @create Tue Sep 26 14:39:27 CST 2023
 */
class ExtPayInfo implements \JsonSerializable {

    /**
     * 支付金额/退款金额，单位: 分，订单金额不做限制，退款单和无原单退款单必须小于等于0
     * @var int
     */
    private $payAmount;

    /**
     * 支付渠道，OUTSIDE_PAYMENT: 外部支付，POSTAGE:运费，PROMOTION:优惠金额
     * @var string
     */
    private $payWay;

    /**
     * 支付时间, 正向单据为支付时间，逆向单据为退款完成时间，单位：毫秒
     * @var int
     */
    private $payTime;



    /**
     * @return int
     */
    public function getPayAmount(): ?int
    {
        return $this->payAmount;
    }

    /**
     * @param int $payAmount
     */
    public function setPayAmount(?int $payAmount): void
    {
        $this->payAmount = $payAmount;
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

    /**
     * @return int
     */
    public function getPayTime(): ?int
    {
        return $this->payTime;
    }

    /**
     * @param int $payTime
     */
    public function setPayTime(?int $payTime): void
    {
        $this->payTime = $payTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}