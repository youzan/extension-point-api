<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 商品明细
 * @author Baymax
 * @create Mon Mar 14 17:00:42 CST 2022
 */
class GoodsIdentityDTO implements \JsonSerializable {

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
     * 订单商品id
     * @var int
     */
    private $orderItemId;



    /**
     * @return int
     */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(?int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}