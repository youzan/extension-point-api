<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 自提点地址信息对象
 * @author Baymax
 * @create 2021-01-22 10:18:32.0
 */
class AddressExtDTO implements \JsonSerializable {

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
    private $district;

    /**
     * 地区id，详情可以使用该接口获取：https://doc.youzanyun.com/detail/API/0/187
     * @var string
     */
    private $regionId;

    /**
     * 详细地址
     * @var string
     */
    private $address;

    /**
     * 经度（百度系）
     * @var string
     */
    private $lng;

    /**
     * 纬度（百度系）
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