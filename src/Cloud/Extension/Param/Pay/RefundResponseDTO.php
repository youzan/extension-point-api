<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-08-15 16:24:20.0
 */
class RefundResponseDTO implements \JsonSerializable {

    /**
     * 商户号
     * @var string
     */
    private $mchId;

    /**
     * 有赞支付单号
     * @var string
     */
    private $yzTradeNo;

    /**
     * 外部支付单号
     * @var string
     */
    private $tradeNo;

    /**
     * 有赞退款单号
     * @var string
     */
    private $yzRefundNo;

    /**
     * 外部退款单号
     * @var string
     */
    private $refundNo;

    /**
     * 退款金额，单位为分
     * @var int
     */
    private $refundAmount;

    /**
     * 退款币种信息
     * @var string
     */
    private $refundCurrency;

    /**
     * 附加数据
     * @var string
     */
    private $attach;

    /**
     * 退款申请成功：APPLY_SUCCESS  退款申请失败：APPLY_FAIL  退款状态未知：UNKNOW（此状态返回时候，有赞会不换单号重试退款申请操作）
     * @var string
     */
    private $refundStatus;

    /**
     * 退款状态描述
     * @var string
     */
    private $refundStatusDesc;



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
    public function getYzTradeNo(): string
    {
        return $this->yzTradeNo;
    }

    /**
     * @param string $yzTradeNo
     */
    public function setYzTradeNo(string $yzTradeNo): void
    {
        $this->yzTradeNo = $yzTradeNo;
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
    public function getYzRefundNo(): string
    {
        return $this->yzRefundNo;
    }

    /**
     * @param string $yzRefundNo
     */
    public function setYzRefundNo(string $yzRefundNo): void
    {
        $this->yzRefundNo = $yzRefundNo;
    }

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
    public function getRefundStatus(): string
    {
        return $this->refundStatus;
    }

    /**
     * @param string $refundStatus
     */
    public function setRefundStatus(string $refundStatus): void
    {
        $this->refundStatus = $refundStatus;
    }

    /**
     * @return string
     */
    public function getRefundStatusDesc(): string
    {
        return $this->refundStatusDesc;
    }

    /**
     * @param string $refundStatusDesc
     */
    public function setRefundStatusDesc(string $refundStatusDesc): void
    {
        $this->refundStatusDesc = $refundStatusDesc;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}