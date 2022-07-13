<?php

namespace Com\Youzan\Cloud\Extension\Param\Ext;

use Com\Youzan\Cloud\Extension\Param\Ext\ItemTradeCloudExtModel;

/**
 *  
 * @author Baymax
 * @create Sun Mar 20 16:00:10 CST 2022
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