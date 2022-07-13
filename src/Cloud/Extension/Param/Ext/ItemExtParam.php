<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;

use Com\Youzan\Cloud\Extension\Param\Ext\ItemParam;

/**
 * 商品参数
 * @author Baymax
 * @create Sun Mar 20 16:00:10 CST 2022
 */
class ItemExtParam implements \JsonSerializable {

    /**
     * 多个商品参数数组
     * @var array
     */
    private $itemParamList;



    /**
     * @return array
     */
    public function getItemParamList(): ?array
    {
        return $this->itemParamList;
    }

    /**
     * @param array $itemParamList
     */
    public function setItemParamList(?array $itemParamList): void
    {
        $this->itemParamList = $itemParamList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}