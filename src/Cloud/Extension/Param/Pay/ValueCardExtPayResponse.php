<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 *  
 * @author Baymax
 * @create Wed Aug 09 17:00:37 CST 2023
 */
class ValueCardExtPayResponse implements \JsonSerializable {

    /**
     * 支付明细号
     * @var string
     */
    private $payDetailNo;

    /**
     * 外部渠道支付单据号，业务方唯一凭证
     * @var string
     */
    private $payChannelNo;

    /**
     * 支付完成时间
     * @var int
     */
    private $paymentDt;

    /**
     * 实际支付金额，单位：分
     * @var int
     */
    private $payAmount;

    /**
     * 支付状态
     * @var string
     */
    private $payStatus;



    /**
     * @return string
     */
    public function getPayDetailNo(): ?string
    {
        return $this->payDetailNo;
    }

    /**
     * @param string $payDetailNo
     */
    public function setPayDetailNo(?string $payDetailNo): void
    {
        $this->payDetailNo = $payDetailNo;
    }

    /**
     * @return string
     */
    public function getPayChannelNo(): ?string
    {
        return $this->payChannelNo;
    }

    /**
     * @param string $payChannelNo
     */
    public function setPayChannelNo(?string $payChannelNo): void
    {
        $this->payChannelNo = $payChannelNo;
    }

    /**
     * @return int
     */
    public function getPaymentDt(): ?int
    {
        return $this->paymentDt;
    }

    /**
     * @param int $paymentDt
     */
    public function setPaymentDt(?int $paymentDt): void
    {
        $this->paymentDt = $paymentDt;
    }

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
    public function getPayStatus(): ?string
    {
        return $this->payStatus;
    }

    /**
     * @param string $payStatus
     */
    public function setPayStatus(?string $payStatus): void
    {
        $this->payStatus = $payStatus;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}