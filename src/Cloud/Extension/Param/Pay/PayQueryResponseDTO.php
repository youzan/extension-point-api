<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-08-15 11:37:58.0
 */
class PayQueryResponseDTO implements \JsonSerializable {

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
     * 支付方式
     * @var string
     */
    private $tradeType;

    /**
     * 支付渠道
     * @var string
     */
    private $payChannel;

    /**
     * 支付成功：SUCCESS,  支付失败：FAIL,  支付中：PAYING,  预支付成功：PRE_PAY_SUCCESS
     * @var string
     */
    private $tradeStatus;

    /**
     * 支付状态描述
     * @var string
     */
    private $tradeStatusDesc;

    /**
     * 支付完成时间
     * @var int
     */
    private $payTime;

    /**
     * 币种信息
     * @var string
     */
    private $payCurrency;

    /**
     * 支付总金额
     * @var int
     */
    private $payAmount;

    /**
     * 附加数据
     * @var string
     */
    private $attach;



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

    /**
     * @return string
     */
    public function getTradeType(): ?string
    {
        return $this->tradeType;
    }

    /**
     * @param string $tradeType
     */
    public function setTradeType(?string $tradeType): void
    {
        $this->tradeType = $tradeType;
    }

    /**
     * @return string
     */
    public function getPayChannel(): ?string
    {
        return $this->payChannel;
    }

    /**
     * @param string $payChannel
     */
    public function setPayChannel(?string $payChannel): void
    {
        $this->payChannel = $payChannel;
    }

    /**
     * @return string
     */
    public function getTradeStatus(): ?string
    {
        return $this->tradeStatus;
    }

    /**
     * @param string $tradeStatus
     */
    public function setTradeStatus(?string $tradeStatus): void
    {
        $this->tradeStatus = $tradeStatus;
    }

    /**
     * @return string
     */
    public function getTradeStatusDesc(): ?string
    {
        return $this->tradeStatusDesc;
    }

    /**
     * @param string $tradeStatusDesc
     */
    public function setTradeStatusDesc(?string $tradeStatusDesc): void
    {
        $this->tradeStatusDesc = $tradeStatusDesc;
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

    /**
     * @return string
     */
    public function getPayCurrency(): ?string
    {
        return $this->payCurrency;
    }

    /**
     * @param string $payCurrency
     */
    public function setPayCurrency(?string $payCurrency): void
    {
        $this->payCurrency = $payCurrency;
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
    public function getAttach(): ?string
    {
        return $this->attach;
    }

    /**
     * @param string $attach
     */
    public function setAttach(?string $attach): void
    {
        $this->attach = $attach;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}