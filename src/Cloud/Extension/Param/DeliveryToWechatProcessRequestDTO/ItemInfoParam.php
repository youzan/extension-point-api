<?php

namespace Com\Youzan\Cloud\Extension\Param\DeliveryToWechatProcessRequestDTO;

use Com\Youzan\Cloud\Extension\Param\DeliveryToWechatProcessRequestDTO\ItemInfo;

/**
 * 商品信息
 * @author Baymax
 * @create Thu Jan 13 20:45:03 CST 2022
 */
class ItemInfoParam implements \JsonSerializable {

    /**
     * 商品信息列表
     * @var array
     */
    private $itemInfos;



    /**
     * @return array
     */
    public function getItemInfos(): ?array
    {
        return $this->itemInfos;
    }

    /**
     * @param array $itemInfos
     */
    public function setItemInfos(?array $itemInfos): void
    {
        $this->itemInfos = $itemInfos;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}