<?php

namespace Com\Youzan\Cloud\Extension\Param\Common;



/**
 *  
 * @author Baymax
 * @create Mon Mar 14 16:51:11 CST 2022
 */
class Address implements \JsonSerializable {

    /**
     * 省份
     * @var string
     */
    private $province;

    /**
     * 城市
     * @var string
     */
    private $city;

    /**
     * 区县
     * @var string
     */
    private $county;

    /**
     * 区县地址编码
     * @var int
     */
    private $countyId;

    /**
     * 详细地址
     * @var string
     */
    private $address;

    /**
     * 经度，百度坐标系
     * @var string
     */
    private $lng;

    /**
     * 纬度，百度坐标系
     * @var string
     */
    private $lat;



    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince(?string $province): void
    {
        $this->province = $province;
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
    public function getCounty(): ?string
    {
        return $this->county;
    }

    /**
     * @param string $county
     */
    public function setCounty(?string $county): void
    {
        $this->county = $county;
    }

    /**
     * @return int
     */
    public function getCountyId(): ?int
    {
        return $this->countyId;
    }

    /**
     * @param int $countyId
     */
    public function setCountyId(?int $countyId): void
    {
        $this->countyId = $countyId;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}