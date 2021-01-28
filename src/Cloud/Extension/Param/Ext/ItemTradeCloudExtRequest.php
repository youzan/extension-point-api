<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;

use Com\Youzan\Cloud\Extension\Param\Ext\ItemExtParam;

/**
 * 参数request
 * @author Baymax
 * @create 2020-11-16 20:06:15.0
 */
class ItemTradeCloudExtRequest implements \JsonSerializable {

    /**
     * 商品参数
     * @var ItemExtParam
     */
    private $itemExtParam;



    /**
     * @return ItemExtParam
     */
    public function getItemExtParam(): ItemExtParam
    {
        return $this->itemExtParam;
    }

    /**
     * @param ItemExtParam $itemExtParam
     */
    public function setItemExtParam(ItemExtParam $itemExtParam): void
    {
        $this->itemExtParam = $itemExtParam;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}