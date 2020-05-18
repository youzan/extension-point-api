<?php

namespace Com\Youzan\Cloud\Extension\Param\Goods;

use Com\Youzan\Cloud\Extension\Param\Goods\ExtGoodsConfigDetail;

/**
 * 
 * @author Baymax
 * @create Fri May 08 14:35:44 CST 2020
 */
class ExtGoodsConfigResponse implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $goodsConfigList;



    /**
     * @return array
     */
    public function getGoodsConfigList(): array
    {
        return $this->goodsConfigList;
    }

    /**
     * @param array $goodsConfigList
     */
    public function setGoodsConfigList(array $goodsConfigList): void
    {
        $this->goodsConfigList = $goodsConfigList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}