<?php

namespace Com\Youzan\Cloud\Extension\Param\DeliveryToWechatProcessRequestDTO;



/**
 * 商品信息列表
 * @author Baymax
 * @create 2021-07-05 20:45:27.0
 */
class ItemInfo implements \JsonSerializable {

    /**
     * skuId
     * @var int
     */
    private $skuId;

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * 数量
     * @var int
     */
    private $count;



    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}