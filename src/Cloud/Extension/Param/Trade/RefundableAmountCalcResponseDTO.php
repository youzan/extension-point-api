<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\RefundableItemDTO;

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
     * 订单可退款金额
     * @var int
     */
    private $refundableAmt;

    /**
     * 
     * @var array
     */
    private $refundableItemList;



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
     * @return array
     */
    public function getRefundableItemList(): array
    {
        return $this->refundableItemList;
    }

    /**
     * @param array $refundableItemList
     */
    public function setRefundableItemList(array $refundableItemList): void
    {
        $this->refundableItemList = $refundableItemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}