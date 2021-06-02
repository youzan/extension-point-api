<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-05-25 10:09:40.0
 */
class LocalDeliveryCheckDTO implements \JsonSerializable {

    /**
     * 重量，单位克
     * @var int
     */
    private $weight;

    /**
     * 买家收货地址
     * @var string
     */
    private $buyerAddress;

    /**
     * 买家收货地址经度(百度系)
     * @var string
     */
    private $buyerLng;

    /**
     * 买家收货地址纬度(百度系)
     * @var string
     */
    private $buyerLat;

    /**
     * 商品id列表
     * @var array
     */
    private $itemIds;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * skuid列表
     * @var array
     */
    private $skuIds;

    /**
     * sku数量列表
     * @var array
     */
    private $skuCounts;

    /**
     * 交易唯一标识
     * @var string
     */
    private $bookKey;



    /**
     * @return int
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getBuyerAddress(): ?string
    {
        return $this->buyerAddress;
    }

    /**
     * @param string $buyerAddress
     */
    public function setBuyerAddress(?string $buyerAddress): void
    {
        $this->buyerAddress = $buyerAddress;
    }

    /**
     * @return string
     */
    public function getBuyerLng(): ?string
    {
        return $this->buyerLng;
    }

    /**
     * @param string $buyerLng
     */
    public function setBuyerLng(?string $buyerLng): void
    {
        $this->buyerLng = $buyerLng;
    }

    /**
     * @return string
     */
    public function getBuyerLat(): ?string
    {
        return $this->buyerLat;
    }

    /**
     * @param string $buyerLat
     */
    public function setBuyerLat(?string $buyerLat): void
    {
        $this->buyerLat = $buyerLat;
    }

    /**
     * @return array
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * @param array $itemIds
     */
    public function setItemIds(?array $itemIds): void
    {
        $this->itemIds = $itemIds;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return array
     */
    public function getSkuIds(): ?array
    {
        return $this->skuIds;
    }

    /**
     * @param array $skuIds
     */
    public function setSkuIds(?array $skuIds): void
    {
        $this->skuIds = $skuIds;
    }

    /**
     * @return array
     */
    public function getSkuCounts(): ?array
    {
        return $this->skuCounts;
    }

    /**
     * @param array $skuCounts
     */
    public function setSkuCounts(?array $skuCounts): void
    {
        $this->skuCounts = $skuCounts;
    }

    /**
     * @return string
     */
    public function getBookKey(): ?string
    {
        return $this->bookKey;
    }

    /**
     * @param string $bookKey
     */
    public function setBookKey(?string $bookKey): void
    {
        $this->bookKey = $bookKey;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}