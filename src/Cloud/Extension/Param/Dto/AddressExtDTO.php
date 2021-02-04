<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 自提点地址信息对象
 * @author Baymax
 * @create 2021-01-22 10:18:32.0
 */
class AddressExtDTO implements \JsonSerializable {

    /**
     * 纬度仅支持百度坐标系
     * @var string
     */
    private $lat;

    /**
     * 经度仅支持百度坐标系
     * @var string
     */
    private $lng;

    /**
     * 详细地址
     * @var string
     */
    private $address;

    /**
     * 区名
     * @var string
     */
    private $countyName;

    /**
     * 省名
     * @var string
     */
    private $provinceName;

    /**
     * 城市名
     * @var string
     */
    private $cityName;



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
    public function getCountyName(): ?string
    {
        return $this->countyName;
    }

    /**
     * @param string $countyName
     */
    public function setCountyName(?string $countyName): void
    {
        $this->countyName = $countyName;
    }

    /**
     * @return string
     */
    public function getProvinceName(): ?string
    {
        return $this->provinceName;
    }

    /**
     * @param string $provinceName
     */
    public function setProvinceName(?string $provinceName): void
    {
        $this->provinceName = $provinceName;
    }

    /**
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     */
    public function setCityName(?string $cityName): void
    {
        $this->cityName = $cityName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}