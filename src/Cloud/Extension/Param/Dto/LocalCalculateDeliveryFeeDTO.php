<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 14:59:42.0
 */
class LocalCalculateDeliveryFeeDTO implements \JsonSerializable {

    /**
     * 重量,克
     * @var int
     */
    private $weight;

    /**
     * 距离,米
     * @var int
     */
    private $distance;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 买家收货地址
     * @var array
     */
    private $buyerAddress;

    /**
     * 买家经度
     * @var array
     */
    private $buyerLng;

    /**
     * 买家纬度
     * @var array
     */
    private $buyerLat;



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
     * @return int
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function setDistance(?int $distance): void
    {
        $this->distance = $distance;
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
    public function getBuyerAddress(): ?array
    {
        return $this->buyerAddress;
    }

    /**
     * @param array $buyerAddress
     */
    public function setBuyerAddress(?array $buyerAddress): void
    {
        $this->buyerAddress = $buyerAddress;
    }

    /**
     * @return array
     */
    public function getBuyerLng(): ?array
    {
        return $this->buyerLng;
    }

    /**
     * @param array $buyerLng
     */
    public function setBuyerLng(?array $buyerLng): void
    {
        $this->buyerLng = $buyerLng;
    }

    /**
     * @return array
     */
    public function getBuyerLat(): ?array
    {
        return $this->buyerLat;
    }

    /**
     * @param array $buyerLat
     */
    public function setBuyerLat(?array $buyerLat): void
    {
        $this->buyerLat = $buyerLat;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}