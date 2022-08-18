<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 20:54:23 CST 2022
 */
class RefundableItemDTO implements \JsonSerializable {

    /**
     * 子订单标识
     * @var string
     */
    private $itemId;

    /**
     * 商品可退金额，单位为分
     * @var int
     */
    private $refundableAmt;



    /**
     * @return string
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     */
    public function setItemId(?string $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getRefundableAmt(): ?int
    {
        return $this->refundableAmt;
    }

    /**
     * @param int $refundableAmt
     */
    public function setRefundableAmt(?int $refundableAmt): void
    {
        $this->refundableAmt = $refundableAmt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}