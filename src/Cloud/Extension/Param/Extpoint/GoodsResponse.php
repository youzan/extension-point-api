<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;



/**
 * 活动商品列表
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class GoodsResponse implements \JsonSerializable {

    /**
     * 活动商品ID
     * @var int
     */
    private $itemId;

    /**
     * 活动规格ID
     * @var int
     */
    private $skuId;

    /**
     * 活动下单商品ID
     * @var int
     */
    private $orderItemId;

    /**
     * 商品优惠金额, 单位： 分
     * @var int
     */
    private $decrease;



    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
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

    /**
     * @return int
     */
    public function getDecrease(): ?int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(?int $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}