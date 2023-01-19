<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Mon Oct 31 21:33:55 CST 2022
 */
class RefundRequestDTO implements \JsonSerializable {

    /**
     * 商户号
     * @var string
     */
    private $mchId;

    /**
     * 有赞支付单号（和外部支付单号二选一，不能同时为空）
     * @var string
     */
    private $yzTradeNo;

    /**
     * 外部支付单号（和有赞支付单号二选一，不能同时为空）
     * @var string
     */
    private $tradeNo;

    /**
     * 有赞退款单号
     * @var string
     */
    private $yzRefundNo;

    /**
     * 退款金额，单位为分
     * @var int
     */
    private $refundAmount;

    /**
     * 退款币种信息。默认为CNY
     * @var string
     */
    private $refundCurrency;

    /**
     * 退款描述
     * @var string
     */
    private $description;

    /**
     * 退款结果通知url
     * @var string
     */
    private $notifyUrl;

    /**
     * 附加数据
     * @var string
     */
    private $attach;

    /**
     * 退款扩展参数
     * @var stdClass
     */
    private $extra;

    /**
     * 业务订单号
     * @var string
     */
    private $yzOutBizNo;

    /**
     * 有赞交易退款业务单号
     * @var string
     */
    private $yzOutBizRefundNo;



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
    public function getYzRefundNo(): ?string
    {
        return $this->yzRefundNo;
    }

    /**
     * @param string $yzRefundNo
     */
    public function setYzRefundNo(?string $yzRefundNo): void
    {
        $this->yzRefundNo = $yzRefundNo;
    }

    /**
     * @return int
     */
    public function getRefundAmount(): ?int
    {
        return $this->refundAmount;
    }

    /**
     * @param int $refundAmount
     */
    public function setRefundAmount(?int $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return string
     */
    public function getRefundCurrency(): ?string
    {
        return $this->refundCurrency;
    }

    /**
     * @param string $refundCurrency
     */
    public function setRefundCurrency(?string $refundCurrency): void
    {
        $this->refundCurrency = $refundCurrency;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getNotifyUrl(): ?string
    {
        return $this->notifyUrl;
    }

    /**
     * @param string $notifyUrl
     */
    public function setNotifyUrl(?string $notifyUrl): void
    {
        $this->notifyUrl = $notifyUrl;
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

    /**
     * @return string
     */
    public function getYzOutBizNo(): ?string
    {
        return $this->yzOutBizNo;
    }

    /**
     * @param string $yzOutBizNo
     */
    public function setYzOutBizNo(?string $yzOutBizNo): void
    {
        $this->yzOutBizNo = $yzOutBizNo;
    }

    /**
     * @return string
     */
    public function getYzOutBizRefundNo(): ?string
    {
        return $this->yzOutBizRefundNo;
    }

    /**
     * @param string $yzOutBizRefundNo
     */
    public function setYzOutBizRefundNo(?string $yzOutBizRefundNo): void
    {
        $this->yzOutBizRefundNo = $yzOutBizRefundNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}