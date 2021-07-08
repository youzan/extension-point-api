<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class ComputingItemIdentity implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $shopId;

    /**
     * 
     * @var int
     */
    private $rootGoodsId;

    /**
     * 
     * @var int
     */
    private $rootSkuId;

    /**
     * 
     * @var int
     */
    private $businessId;



    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(?int $shopId): void
    {
        $this->shopId = $shopId;
    }

    /**
     * @return int
     */
    public function getRootGoodsId(): ?int
    {
        return $this->rootGoodsId;
    }

    /**
     * @param int $rootGoodsId
     */
    public function setRootGoodsId(?int $rootGoodsId): void
    {
        $this->rootGoodsId = $rootGoodsId;
    }

    /**
     * @return int
     */
    public function getRootSkuId(): ?int
    {
        return $this->rootSkuId;
    }

    /**
     * @param int $rootSkuId
     */
    public function setRootSkuId(?int $rootSkuId): void
    {
        $this->rootSkuId = $rootSkuId;
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