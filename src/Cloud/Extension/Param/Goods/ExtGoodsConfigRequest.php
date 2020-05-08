<?php

namespace Com\Youzan\Cloud\Extension\Param\Goods;



/**
 * 
 * @author Baymax
 * @create 2020-05-08 14:35:44.0
 */
class ExtGoodsConfigRequest implements \JsonSerializable {

    /**
     * 商品id列表
     * @var array
     */
    private $goodsIdList;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return array
     */
    public function getGoodsIdList(): array
    {
        return $this->goodsIdList;
    }

    /**
     * @param array $goodsIdList
     */
    public function setGoodsIdList(array $goodsIdList): void
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}