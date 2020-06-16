<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 商品基础信息
 * @author Baymax
 * @create Thu Jun 11 11:03:35 CST 2020
 */
class GoodsInfo implements \JsonSerializable {

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 规格id
     * @var int
     */
    private $skuId;

    /**
     * 明细id
     * @var int
     */
    private $orderItemId;

    /**
     * 商品原价
     * @var int
     */
    private $price;

    /**
     * 商品数量
     * @var int
     */
    private $num;



    /**
     * @return int
     */
    public function getGoodsId(): int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return int
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}