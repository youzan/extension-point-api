<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 商品详细优惠
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class GoodsResponse implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $goodsId;

    /**
     * 规格ID
     * @var int
     */
    private $skuId;

    /**
     * 条目 ID，可以确定一笔订单中的一项
     * @var int
     */
    private $orderItemId;

    /**
     * 优惠金额（单位/分)
     * @var int
     */
    private $decrease;



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
    public function getDecrease(): int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(int $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}