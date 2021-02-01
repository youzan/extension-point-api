<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\ItemExtParam;

/**
 * 
 * @author Baymax
 * @create 2020-11-17 00:05:12.0
 */
class ItemTradeCloudExtRequest implements \JsonSerializable {

    /**
     * 
     * @var ItemExtParam
     */
    private $itemExtParam;



    /**
     * @return ItemExtParam
     */
    public function getItemExtParam(): ?ItemExtParam
    {
        return $this->itemExtParam;
    }

    /**
     * @param ItemExtParam $itemExtParam
     */
    public function setItemExtParam(?ItemExtParam $itemExtParam): void
    {
        $this->itemExtParam = $itemExtParam;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}