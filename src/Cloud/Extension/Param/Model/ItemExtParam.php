<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\ItemParam;

/**
 * 
 * @author Baymax
 * @create 2020-11-17 00:05:12.0
 */
class ItemExtParam implements \JsonSerializable {

    /**
     * 
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