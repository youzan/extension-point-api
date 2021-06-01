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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}