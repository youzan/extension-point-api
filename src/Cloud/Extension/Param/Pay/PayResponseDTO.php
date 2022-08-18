<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;
use StdClass;

/**
 *  响应对象
 * @author Baymax
 * @create Thu Jun 30 14:26:03 CST 2022
 */
class PayResponseDTO implements \JsonSerializable {

    /**
     * 有赞支付单号
     * @var string
     */
    private $yzTradeNo;

    /**
     * 外部支付单号；有赞云支付通道扩展点服务回执单号
     * @var string
     */
    private $tradeNo;

    /**
     * 有赞分配的商户号
     * @var string
     */
    private $mchId;

    /**
     * 支付方式，例如微信、支付宝，同PAY_CHANNEL_API
     * @var string
     */
    private $tradeType;

    /**
     * 支付完成时间
     * @var int
     */
    private $payTime;

    /**
     * 支付状态  支付成功：SUCCESS,  支付失败：FAIL,  支付中：PAYING,  预支付成功：PRE_PAY_SUCCESS
     * @var string
     */
    private $tradeStatus;

    /**
     * 支付状态描述
     * @var string
     */
    private $tradeStatusDesc;

    /**
     * 支付渠道，同PAY_CHANNEL
     * @var string
     */
    private $payChannel;

    /**
     * 金额（单位为分 ）
     * @var int
     */
    private $payAmount;

    /**
     * 币种信息（默认为CNY）
     * @var string
     */
    private $payCurrency;

    /**
     * 附加数据（需原路返回）
     * @var string
     */
    private $attach;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extra;



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

    /**
     * @return stdClass
     */
    public function getExtra(): ?stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(?stdClass $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}