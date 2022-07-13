<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 商品信息
 * @author Baymax
 * @create 2021-09-26 11:21:07.0
 */
class ItemInfoOpenDTO implements \JsonSerializable {

    /**
     * 商品id
     * @var int
     */
    private $itemId;

    /**
     * skuId
     * @var int
     */
    private $skuId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}