<?php

namespace Com\Youzan\Cloud\Extension\Param\Goods;

use Com\Youzan\Cloud\Extension\Param\Goods\ExtGoodsLevelRate;

/**
 * 
 * @author Baymax
 * @create 2020-05-08 14:35:44.0
 */
class ExtGoodsConfigDetail implements \JsonSerializable {

    /**
     * 商品所在店铺id，回传request中的kdtId即可。
     * @var int
     */
    private $kdtId;

    /**
     * 商品id。回传request中的商品id
     * @var int
     */
    private $goodsId;

    /**
     * 商品佣金设置，包含每个等级
     * @var array
     */
    private $levelRateList;



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
     * @return array
     */
    public function getLevelRateList(): array
    {
        return $this->levelRateList;
    }

    /**
     * @param array $levelRateList
     */
    public function setLevelRateList(array $levelRateList): void
    {
        $this->levelRateList = $levelRateList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}