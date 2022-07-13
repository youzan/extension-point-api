<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class ExchangeGoods implements \JsonSerializable {

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
     *  
     * @var int
     */
    private $exchangePrice;



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

    /**
     * @return int
     */
    public function getExchangePrice(): ?int
    {
        return $this->exchangePrice;
    }

    /**
     * @param int $exchangePrice
     */
    public function setExchangePrice(?int $exchangePrice): void
    {
        $this->exchangePrice = $exchangePrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}