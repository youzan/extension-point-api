<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 *  复合id
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
     * 模型扩展字段
     * @var stdClass
     */
    private $extModelMap;



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
     * @return stdClass
     */
    public function getExtModelMap(): stdClass
    {
        return $this->extModelMap;
    }

    /**
     * @param stdClass $extModelMap
     */
    public function setExtModelMap(stdClass $extModelMap): void
    {
        $this->extModelMap = $extModelMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}