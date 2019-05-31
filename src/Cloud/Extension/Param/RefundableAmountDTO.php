<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 退款计算结果
 * @author Baymax
 * @create 2018-10-09 10:05:17.0
 */
class RefundableAmountDTO implements \JsonSerializable {

    /**
     * 订单或者商品的可退金额（单位分）
     * @var int
     */
    private $refundableAmt;

    /**
     * orderNo 或者 itemId，可以针对商品也可以针对整个订单
     * @var string
     */
    private $bizNo;



    /**
     * @return int
     */
    public function getRefundableAmt(): int
    {
        return $this->refundableAmt;
    }

    /**
     * @param int $refundableAmt
     */
    public function setRefundableAmt(int $refundableAmt): void
    {
        $this->refundableAmt = $refundableAmt;
    }

    /**
     * @return string
     */
    public function getBizNo(): string
    {
        return $this->bizNo;
    }

    /**
     * @param string $bizNo
     */
    public function setBizNo(string $bizNo): void
    {
        $this->bizNo = $bizNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}