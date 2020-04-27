<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 
 * @author Baymax
 * @create 2020-04-27 17:33:11.0
 */
class GoodsIdentityDTO implements \JsonSerializable {

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}