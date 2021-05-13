<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;



/**
 * 
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class GoodsResponse implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $goodsId;

    /**
     * 
     * @var int
     */
    private $skuId;

    /**
     * 
     * @var int
     */
    private $orderItemId;

    /**
     * 
     * @var int
     */
    private $decrease;



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