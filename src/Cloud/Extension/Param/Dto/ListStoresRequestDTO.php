<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class ListStoresRequestDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var int
     */
    private $buyerId;

    /**
     * 
     * @var string
     */
    private $keyword;

    /**
     * 
     * @var string
     */
    private $lng;

    /**
     * 
     * @var string
     */
    private $lat;

    /**
     * 
     * @var string
     */
    private $city;

    /**
     * 
     * @var string
     */
    private $regionId;



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
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(?string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @return string
     */
    public function getLng(): ?string
    {
        return $this->lng;
    }

    /**
     * @param string $lng
     */
    public function setLng(?string $lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return string
     */
    public function getLat(): ?string
    {
        return $this->lat;
    }

    /**
     * @param string $lat
     */
    public function setLat(?string $lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }

    /**
     * @param string $regionId
     */
    public function setRegionId(?string $regionId): void
    {
        $this->regionId = $regionId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}