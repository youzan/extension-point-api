<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-08-15 11:37:58.0
 */
class PayQueryResponseDTO implements \JsonSerializable {

    /**
     * 支付单号
     * @var string
     */
    private $tradeNo;

    /**
     * 有赞支付单号
     * @var string
     */
    private $outTradeNo;

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
    private $tradeState;

    /**
     * 支付状态描述
     * @var string
     */
    private $tradeStateDesc;

    /**
     * 支付完成时间
     * @var string
     */
    private $timeEnd;

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
     * 错误信息
     * @var string
     */
    private $errorReason;



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
    public function getOutTradeNo(): string
    {
        return $this->outTradeNo;
    }

    /**
     * @param string $outTradeNo
     */
    public function setOutTradeNo(string $outTradeNo): void
    {
        $this->outTradeNo = $outTradeNo;
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

    /**
     * @return string
     */
    public function getTradeType(): string
    {
        return $this->tradeType;
    }

    /**
     * @param string $tradeType
     */
    public function setTradeType(string $tradeType): void
    {
        $this->tradeType = $tradeType;
    }

    /**
     * @return string
     */
    public function getPayChannel(): string
    {
        return $this->payChannel;
    }

    /**
     * @param string $payChannel
     */
    public function setPayChannel(string $payChannel): void
    {
        $this->payChannel = $payChannel;
    }

    /**
     * @return string
     */
    public function getTradeState(): string
    {
        return $this->tradeState;
    }

    /**
     * @param string $tradeState
     */
    public function setTradeState(string $tradeState): void
    {
        $this->tradeState = $tradeState;
    }

    /**
     * @return string
     */
    public function getTradeStateDesc(): string
    {
        return $this->tradeStateDesc;
    }

    /**
     * @param string $tradeStateDesc
     */
    public function setTradeStateDesc(string $tradeStateDesc): void
    {
        $this->tradeStateDesc = $tradeStateDesc;
    }

    /**
     * @return string
     */
    public function getTimeEnd(): string
    {
        return $this->timeEnd;
    }

    /**
     * @param string $timeEnd
     */
    public function setTimeEnd(string $timeEnd): void
    {
        $this->timeEnd = $timeEnd;
    }

    /**
     * @return string
     */
    public function getPayCurrency(): string
    {
        return $this->payCurrency;
    }

    /**
     * @param string $payCurrency
     */
    public function setPayCurrency(string $payCurrency): void
    {
        $this->payCurrency = $payCurrency;
    }

    /**
     * @return int
     */
    public function getPayAmount(): int
    {
        return $this->payAmount;
    }

    /**
     * @param int $payAmount
     */
    public function setPayAmount(int $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getAttach(): string
    {
        return $this->attach;
    }

    /**
     * @param string $attach
     */
    public function setAttach(string $attach): void
    {
        $this->attach = $attach;
    }

    /**
     * @return string
     */
    public function getErrorReason(): string
    {
        return $this->errorReason;
    }

    /**
     * @param string $errorReason
     */
    public function setErrorReason(string $errorReason): void
    {
        $this->errorReason = $errorReason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}