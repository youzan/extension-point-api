<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;

use Com\Youzan\Cloud\Extension\Param\Ext\ItemTradeCloudExtModel;

/**
 * 
 * @author Baymax
 * @create 2020-11-16 20:06:15.0
 */
class ItemTradeCloudExtResponse implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $itemTradeCloudExtModelList;



    /**
     * @return array
     */
    public function getItemTradeCloudExtModelList(): ?array
    {
        return $this->itemTradeCloudExtModelList;
    }

    /**
     * @param array $itemTradeCloudExtModelList
     */
    public function setItemTradeCloudExtModelList(?array $itemTradeCloudExtModelList): void
    {
        $this->itemTradeCloudExtModelList = $itemTradeCloudExtModelList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}