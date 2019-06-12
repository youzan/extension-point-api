<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 复合id
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class SkuCompositeId implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $goodsId;

    /**
     * 商品skuID
     * @var int
     */
    private $skuId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}