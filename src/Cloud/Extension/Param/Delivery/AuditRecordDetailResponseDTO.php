<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create 2019-09-19 19:45:04.0
 */
class AuditRecordDetailResponseDTO implements \JsonSerializable {

    /**
     * 店铺名称
     * @var string
     */
    private $shopName;

    /**
     * 业务类型 1 -&gt; 食品小吃; 2 -&gt; 食品饮料; 3 -&gt; 鲜花; 8 -&gt; 文印票务; 9 -&gt; 商超便利店; 13 -&gt; 水果生鲜; 20 -&gt; 医药; 21 -&gt; 蛋糕; 24 -&gt; 酒品; 26 -&gt; 服装; 27 -&gt; 汽修零配; 28 -&gt; 数码; 5 -&gt; 其他
     * @var int
     */
    private $business;

    /**
     * 省份名称
     * @var string
     */
    private $provinceName;

    /**
     * 城市名称
     * @var string
     */
    private $cityName;

    /**
     * 区县名称
     * @var string
     */
    private $countyName;

    /**
     * 地区编码，和国家民政局一致
     * @var string
     */
    private $countyCode;

    /**
     * 店铺详细地址，不包含省市区
     * @var string
     */
    private $shopAddress;

    /**
     * 店铺经纬度来源，默认为3，表示高德经纬度，暂时只支持高德
     * @var int
     */
    private $positionSource;

    /**
     * 联系人名称
     * @var string
     */
    private $contactName;

    /**
     * 联系人电话
     * @var string
     */
    private $contactPhone;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 店铺经度
     * @var string
     */
    private $lng;

    /**
     * 店铺纬度
     * @var string
     */
    private $lat;

    /**
     * 审核结果，1 待审核|审核中 2 审核成功(可推单) 3 审核失败
     * @var int
     */
    private $status;



    /**
     * @return string
     */
    public function getShopName(): string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     */
    public function setShopName(string $shopName): void
    {
        $this->shopName = $shopName;
    }

    /**
     * @return int
     */
    public function getBusiness(): int
    {
        return $this->business;
    }

    /**
     * @param int $business
     */
    public function setBusiness(int $business): void
    {
        $this->business = $business;
    }

    /**
     * @return string
     */
    public function getProvinceName(): string
    {
        return $this->provinceName;
    }

    /**
     * @param string $provinceName
     */
    public function setProvinceName(string $provinceName): void
    {
        $this->provinceName = $provinceName;
    }

    /**
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     */
    public function setCityName(string $cityName): void
    {
        $this->cityName = $cityName;
    }

    /**
     * @return string
     */
    public function getCountyName(): string
    {
        return $this->countyName;
    }

    /**
     * @param string $countyName
     */
    public function setCountyName(string $countyName): void
    {
        $this->countyName = $countyName;
    }

    /**
     * @return string
     */
    public function getCountyCode(): string
    {
        return $this->countyCode;
    }

    /**
     * @param string $countyCode
     */
    public function setCountyCode(string $countyCode): void
    {
        $this->countyCode = $countyCode;
    }

    /**
     * @return string
     */
    public function getShopAddress(): string
    {
        return $this->shopAddress;
    }

    /**
     * @param string $shopAddress
     */
    public function setShopAddress(string $shopAddress): void
    {
        $this->shopAddress = $shopAddress;
    }

    /**
     * @return int
     */
    public function getPositionSource(): int
    {
        return $this->positionSource;
    }

    /**
     * @param int $positionSource
     */
    public function setPositionSource(int $positionSource): void
    {
        $this->positionSource = $positionSource;
    }

    /**
     * @return string
     */
    public function getContactName(): string
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     */
    public function setContactName(string $contactName): void
    {
        $this->contactName = $contactName;
    }

    /**
     * @return string
     */
    public function getContactPhone(): string
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     */
    public function setContactPhone(string $contactPhone): void
    {
        $this->contactPhone = $contactPhone;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getLng(): string
    {
        return $this->lng;
    }

    /**
     * @param string $lng
     */
    public function setLng(string $lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return string
     */
    public function getLat(): string
    {
        return $this->lat;
    }

    /**
     * @param string $lat
     */
    public function setLat(string $lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}