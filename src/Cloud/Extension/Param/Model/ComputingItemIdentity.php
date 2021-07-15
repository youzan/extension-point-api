<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 商品条目
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class ComputingItemIdentity implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * 规格ID
     * @var int
     */
    private $skuId;

    /**
     * 商品交易条目ID
     * @var int
     */
    private $businessId;



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

    /**
     * @return int
     */
    public function getBusinessId(): ?int
    {
        return $this->businessId;
    }

    /**
     * @param int $businessId
     */
    public function setBusinessId(?int $businessId): void
    {
        $this->businessId = $businessId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}