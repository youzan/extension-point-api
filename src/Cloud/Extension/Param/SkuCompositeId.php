<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 复合id
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class SkuCompositeId implements \JsonSerializable {

    /**
     * 商品Id，有赞生成的店铺下商品唯一id，平台唯一。
     * @var int
     */
    private $goodsId;

    /**
     * 商品规格Id，微商城店铺商品规格标识（同一商品Id下，规格id唯一）
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
     * @return stdClass
     */
    public function getExtModelMap(): ?stdClass
    {
        return $this->extModelMap;
    }

    /**
     * @param stdClass $extModelMap
     */
    public function setExtModelMap(?stdClass $extModelMap): void
    {
        $this->extModelMap = $extModelMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}