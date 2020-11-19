<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 商品详细优惠
 * @author Baymax
 * @create Thu Jun 11 11:03:35 CST 2020
 */
class GoodsResponse implements \JsonSerializable {

    /**
     * 商品统一itemId。商品不再区分总店、分店商品id，只需要统一的itemId，itemId+总店/任意分店Id即可查询商品
     * @var int
     */
    private $itemId;

    /**
     * 规格统一skuId。商品不再区分总店、分店skuid，只需要统一的skuId，skuId+总店/任意分店Id即可查询商品
     * @var int
     */
    private $skuId;

    /**
     * 明细id
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