<?php

namespace Com\Youzan\Cloud\Extension\Param\Shop;



/**
 * 
 * @author Baymax
 * @create 2020-08-11 14:49:48.0
 */
class ShopEnterRequest implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 会话id
     * @var string
     */
    private $sessionId;

    /**
     * 买家用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 来源渠道,小程序、H5
     * @var string
     */
    private $sourceType;

    /**
     * 进店url
     * @var string
     */
    private $url;

    /**
     * 纬度
     * @var string
     */
    private $lat;

    /**
     * 经度
     * @var string
     */
    private $lng;

    /**
     * 国家
     * @var string
     */
    private $countryName;

    /**
     * 省
     * @var string
     */
    private $provinceName;

    /**
     * 市
     * @var string
     */
    private $cityName;

    /**
     * 区
     * @var string
     */
    private $countyName;

    /**
     * 获取定位动作标识 0:首次进店 1:同意定位授权 2:拒绝定位授权
     * @var int
     */
    private $positionBehaviorSign;

    /**
     * 用户获取定位行为标记:1:强制进店0:默认值
     * @var int
     */
    private $directEnterSign;



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
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     */
    public function setSessionId(?string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    /**
     * @param string $sourceType
     */
    public function setSourceType(?string $sourceType): void
    {
        $this->sourceType = $sourceType;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
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
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName(?string $countryName): void
    {
        $this->countryName = $countryName;
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
     * @return int
     */
    public function getPositionBehaviorSign(): ?int
    {
        return $this->positionBehaviorSign;
    }

    /**
     * @param int $positionBehaviorSign
     */
    public function setPositionBehaviorSign(?int $positionBehaviorSign): void
    {
        $this->positionBehaviorSign = $positionBehaviorSign;
    }

    /**
     * @return int
     */
    public function getDirectEnterSign(): ?int
    {
        return $this->directEnterSign;
    }

    /**
     * @param int $directEnterSign
     */
    public function setDirectEnterSign(?int $directEnterSign): void
    {
        $this->directEnterSign = $directEnterSign;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}