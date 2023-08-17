<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 下单商品信息
 * @author Baymax
 * @create Thu May 19 15:03:57 CST 2022
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
     * 实付金额
     * @var int
     */
    private $realPay;



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

    /**
     * @return int
     */
    public function getRealPay(): ?int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(?int $realPay): void
    {
        $this->realPay = $realPay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}