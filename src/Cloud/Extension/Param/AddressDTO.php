<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 收货地址
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class AddressDTO implements \JsonSerializable {

    /**
     * 配送纬度
     * @var string
     */
    private $lat;

    /**
     * 配送经度
     * @var string
     */
    private $lon;

    /**
     * 地区码
     * @var string
     */
    private $areaCode;

    /**
     * 邮编
     * @var string
     */
    private $postalCode;

    /**
     * 详细地址
     * @var string
     */
    private $detail;

    /**
     * 街道乡镇
     * @var string
     */
    private $street;

    /**
     * 区县
     * @var string
     */
    private $district;

    /**
     * 市
     * @var string
     */
    private $city;

    /**
     * 省份
     * @var string
     */
    private $province;

    /**
     * 国家
     * @var string
     */
    private $country;



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
    public function getLon(): ?string
    {
        return $this->lon;
    }

    /**
     * @param string $lon
     */
    public function setLon(?string $lon): void
    {
        $this->lon = $lon;
    }

    /**
     * @return string
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }

    /**
     * @param string $areaCode
     */
    public function setAreaCode(?string $areaCode): void
    {
        $this->areaCode = $areaCode;
    }

    /**
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     */
    public function setDetail(?string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param string $district
     */
    public function setDistrict(?string $district): void
    {
        $this->district = $district;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}