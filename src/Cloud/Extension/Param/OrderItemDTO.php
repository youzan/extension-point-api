<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 订单条目
 * @author Baymax
 * @create 2018-09-25 17:50:17.0
 */
class OrderItemDTO implements \JsonSerializable {

    /**
     * 子订单号
     * @var int
     */
    private $oid;

    /**
     * 下单的商品数量
     * @var int
     */
    private $orderGoodsNum;



    /**
     * @return int
     */
    public function getOid(): ?int
    {
        return $this->oid;
    }

    /**
     * @param int $oid
     */
    public function setOid(?int $oid): void
    {
        $this->oid = $oid;
    }

    /**
     * @return int
     */
    public function getOrderGoodsNum(): ?int
    {
        return $this->orderGoodsNum;
    }

    /**
     * @param int $orderGoodsNum
     */
    public function setOrderGoodsNum(?int $orderGoodsNum): void
    {
        $this->orderGoodsNum = $orderGoodsNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}