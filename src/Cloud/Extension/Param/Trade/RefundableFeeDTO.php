<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 商品级别可退金额数据
 * @author Baymax
 * @create 2020-04-27 20:55:56.0
 */
class RefundableFeeDTO implements \JsonSerializable {

    /**
     * 子订单标识
     * @var int
     */
    private $itemId;

    /**
     * 商品当前可退金额
     * @var int
     */
    private $itemRefundableFee;



    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getItemRefundableFee(): int
    {
        return $this->itemRefundableFee;
    }

    /**
     * @param int $itemRefundableFee
     */
    public function setItemRefundableFee(int $itemRefundableFee): void
    {
        $this->itemRefundableFee = $itemRefundableFee;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}