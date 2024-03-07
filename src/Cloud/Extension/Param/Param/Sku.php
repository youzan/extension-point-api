<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class Sku implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $skuId;

    /**
     *  
     * @var int
     */
    private $rootSkuId;

    /**
     *  
     * @var int
     */
    private $price;

    /**
     *  
     * @var int
     */
    private $stockNum;



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
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getStockNum(): ?int
    {
        return $this->stockNum;
    }

    /**
     * @param int $stockNum
     */
    public function setStockNum(?int $stockNum): void
    {
        $this->stockNum = $stockNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}