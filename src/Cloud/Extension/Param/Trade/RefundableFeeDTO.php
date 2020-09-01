<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 商品级别可退金额数据
 * @author Baymax
 * @create Mon Apr 27 20:55:56 CST 2020
 */
class RefundableFeeDTO implements \JsonSerializable {

    /**
     * 子订单标识
     * @var string
     */
    private $itemId;

    /**
     * 商品当前可退金额
     * @var int
     */
    private $itemRefundableFee;



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