<?php

namespace Com\Youzan\Cloud\Extension\Param\Vo;



/**
 * 店铺地址
 * @author Baymax
 * @create 2020-08-10 16:52:53.0
 */
class AddressVO implements \JsonSerializable {

    /**
     * 国家
     * @var string
     */
    private $country;

    /**
     * 省
     * @var string
     */
    private $province;

    /**
     * 市
     * @var string
     */
    private $city;

    /**
     * 区
     * @var string
     */
    private $county;

    /**
     * 区编码
     * @var int
     */
    private $countyId;

    /**
     * 详细地址
     * @var string
     */
    private $address;

    /**
     * 经度（百度坐标系）
     * @var string
     */
    private $lng;

    /**
     * 纬度（百度坐标系）
     * @var string
     */
    private $lat;



    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

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