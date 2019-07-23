<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-07-23 17:37:38.0
 */
class RefundableAmountCalcResponseDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单的可退金额
     * @var int
     */
    private $refundableAmt;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extension;



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
     * @return stdClass
     */
    public function getExtension(): stdClass
    {
        return $this->extension;
    }

    /**
     * @param stdClass $extension
     */
    public function setExtension(stdClass $extension): void
    {
        $this->extension = $extension;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}