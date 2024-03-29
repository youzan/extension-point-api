<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 *  
 * @author Baymax
 * @create Thu Jan 27 16:49:25 CST 2022
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
     * @var string
     */
    private $buyerAddress;

    /**
     * 买家经度(百度系)
     * @var string
     */
    private $buyerLng;

    /**
     * 买家纬度(百度系)
     * @var string
     */
    private $buyerLat;

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