<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 退还资金扩展出参
 * @author Baymax
 * @create 2018-09-25 17:57:08.0
 */
class RefundPayParamDTO implements \JsonSerializable {

    /**
     * 退款单号
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
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 商户店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getRefundNo(): string
    {
        return $this->refundNo;
    }

    /**
     * @param string $refundNo
     */
    public function setRefundNo(string $refundNo): void
    {
        $this->refundNo = $refundNo;
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
    public function getRefundReason(): string
    {
        return $this->refundReason;
    }

    /**
     * @param string $refundReason
     */
    public function setRefundReason(string $refundReason): void
    {
        $this->refundReason = $refundReason;
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
    public function getPayId(): string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(string $payId): void
    {
        $this->payId = $payId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}