<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 退还资金扩展出参
 * @author Baymax
 * @create 2018-09-25 17:57:08.0
 */
class RefundPayParamDTO implements \JsonSerializable {

    /**
     * 退款资金流水
     * @var string
     */
    private $refundNo;

    /**
     * 退款完成回调通知地址
     * @var string
     */
    private $notifyUrl;

    /**
     * 退款原因
     * @var string
     */
    private $refundReason;

    /**
     * 退款金额
     * @var int
     */
    private $refundAmount;

    /**
     * 支付凭证
     * @var string
     */
    private $payId;

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合 
     * @var string
     */
    private $orderNo;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 退款单号
     * @var string
     */
    private $refundId;



    /**
     * @return string
     */
    public function getRefundNo(): ?string
    {
        return $this->refundNo;
    }

    /**
     * @param string $refundNo
     */
    public function setRefundNo(?string $refundNo): void
    {
        $this->refundNo = $refundNo;
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
    public function getRefundReason(): ?string
    {
        return $this->refundReason;
    }

    /**
     * @param string $refundReason
     */
    public function setRefundReason(?string $refundReason): void
    {
        $this->refundReason = $refundReason;
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
    public function getPayId(): ?string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(?string $payId): void
    {
        $this->payId = $payId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getRefundId(): ?string
    {
        return $this->refundId;
    }

    /**
     * @param string $refundId
     */
    public function setRefundId(?string $refundId): void
    {
        $this->refundId = $refundId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}