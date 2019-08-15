<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-08-15 16:24:20.0
 */
class RefundRequestDTO implements \JsonSerializable {

    /**
     * 商户号
     * @var string
     */
    private $mchId;

    /**
     * 有赞支付单号
     * @var string
     */
    private $outTradeNo;

    /**
     * 外部支付单号
     * @var string
     */
    private $tradeNo;

    /**
     * 有赞退款单号
     * @var string
     */
    private $outRefundNo;

    /**
     * 退款金额
     * @var int
     */
    private $refundAmount;

    /**
     * 退款币种信息
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
    public function getOutRefundNo(): string
    {
        return $this->outRefundNo;
    }

    /**
     * @param string $outRefundNo
     */
    public function setOutRefundNo(string $outRefundNo): void
    {
        $this->outRefundNo = $outRefundNo;
    }

    /**
     * @return int
     */
    public function getRefundAmount(): int
    {
        return $this->refundAmount;
    }

    /**
     * @param int $refundAmount
     */
    public function setRefundAmount(int $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return string
     */
    public function getRefundCurrency(): string
    {
        return $this->refundCurrency;
    }

    /**
     * @param string $refundCurrency
     */
    public function setRefundCurrency(string $refundCurrency): void
    {
        $this->refundCurrency = $refundCurrency;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getNotifyUrl(): string
    {
        return $this->notifyUrl;
    }

    /**
     * @param string $notifyUrl
     */
    public function setNotifyUrl(string $notifyUrl): void
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return stdClass
     */
    public function getExtra(): stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(stdClass $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}