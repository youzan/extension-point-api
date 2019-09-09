<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 
 * @author Baymax
 * @create 2019-07-24 13:48:58.0
 */
class RefundableItemDTO implements \JsonSerializable {

    /**
     * 商品项标识
     * @var string
     */
    private $itemId;

    /**
     * 商品可退金额
     * @var int
     */
    private $refundableAmt;



    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     */
    public function setItemId(string $itemId): void
    {
        $this->itemId = $itemId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}