<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 23:12:22 CST 2022
 */
class LocalDeliveryOrderDTO implements \JsonSerializable {

    /**
     * 物流订单id，保证唯一
     * @var string
     */
    private $orderOriginalId;

    /**
     * 订单重量，单位为克
     * @var int
     */
    private $orderWeight;

    /**
     * 订单备注
     * @var string
     */
    private $orderRemark;

    /**
     * 标识店铺唯一渠道门店id
     * @var string
     */
    private $originalShopId;

    /**
     * 店铺名称
     * @var string
     */
    private $shopName;

    /**
     * 业务类型 1 -&amp;gt; 食品小吃; 2 -&amp;gt; 食品饮料; 3 -&amp;gt; 鲜花; 8 -&amp;gt; 文印票务; 9 -&amp;gt; 商超便利店; 13 -&amp;gt; 水果生鲜; 20 -&amp;gt; 医药; 21 -&amp;gt; 蛋糕; 24 -&amp;gt; 酒品; 26 -&amp;gt; 服装; 27 -&amp;gt; 汽修零配; 28 -&amp;gt; 数码; 5 -&amp;gt; 其他
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
     * 店铺经度
     * @var string
     */
    private $shopLng;

    /**
     * 店铺纬度
     * @var string
     */
    private $shopLat;

    /**
     * 店铺经纬度来源，默认为3，表示高德经纬度，暂时只支持高德
     * @var int
     */
    private $shopPositionSource;

    /**
     * 联系人名称
     * @var string
     */
    private $shopContactName;

    /**
     * 联系人电话
     * @var string
     */
    private $shopContactPhone;

    /**
     * 收件人详细地址，不包含省市区
     * @var string
     */
    private $consigneeAddress;

    /**
     * 收件人经度
     * @var string
     */
    private $consigneeLng;

    /**
     * 收件人纬度
     * @var string
     */
    private $consigneeLat;

    /**
     * 收件人经纬度来源，默认为3，表示高德经纬度，暂时只支持高德
     * @var int
     */
    private $consigneePositionSource;

    /**
     * 收件人名称
     * @var string
     */
    private $consigneeName;

    /**
     * 收件人电话
     * @var string
     */
    private $consigneePhone;

    /**
     * 期望取货时间
     * @var int
     */
    private $expectFetchTime;

    /**
     * 小费 ，单位为分
     * @var int
     */
    private $tips;

    /**
     * 店铺Id
     * @var int
     */
    private $kdtId;

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合	
     * @var string
     */
    private $outOrderNo;



    /**
     * @return string
     */
    public function getOrderOriginalId(): ?string
    {
        return $this->orderOriginalId;
    }

    /**
     * @param string $orderOriginalId
     */
    public function setOrderOriginalId(?string $orderOriginalId): void
    {
        $this->orderOriginalId = $orderOriginalId;
    }

    /**
     * @return int
     */
    public function getOrderWeight(): ?int
    {
        return $this->orderWeight;
    }

    /**
     * @param int $orderWeight
     */
    public function setOrderWeight(?int $orderWeight): void
    {
        $this->orderWeight = $orderWeight;
    }

    /**
     * @return string
     */
    public function getOrderRemark(): ?string
    {
        return $this->orderRemark;
    }

    /**
     * @param string $orderRemark
     */
    public function setOrderRemark(?string $orderRemark): void
    {
        $this->orderRemark = $orderRemark;
    }

    /**
     * @return string
     */
    public function getOriginalShopId(): ?string
    {
        return $this->originalShopId;
    }

    /**
     * @param string $originalShopId
     */
    public function setOriginalShopId(?string $originalShopId): void
    {
        $this->originalShopId = $originalShopId;
    }

    /**
     * @return string
     */
    public function getShopName(): ?string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     */
    public function setShopName(?string $shopName): void
    {
        $this->shopName = $shopName;
    }

    /**
     * @return int
     */
    public function getBusiness(): ?int
    {
        return $this->business;
    }

    /**
     * @param int $business
     */
    public function setBusiness(?int $business): void
    {
        $this->business = $business;
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
     * @return string
     */
    public function getCountyCode(): ?string
    {
        return $this->countyCode;
    }

    /**
     * @param string $countyCode
     */
    public function setCountyCode(?string $countyCode): void
    {
        $this->countyCode = $countyCode;
    }

    /**
     * @return string
     */
    public function getShopAddress(): ?string
    {
        return $this->shopAddress;
    }

    /**
     * @param string $shopAddress
     */
    public function setShopAddress(?string $shopAddress): void
    {
        $this->shopAddress = $shopAddress;
    }

    /**
     * @return string
     */
    public function getShopLng(): ?string
    {
        return $this->shopLng;
    }

    /**
     * @param string $shopLng
     */
    public function setShopLng(?string $shopLng): void
    {
        $this->shopLng = $shopLng;
    }

    /**
     * @return string
     */
    public function getShopLat(): ?string
    {
        return $this->shopLat;
    }

    /**
     * @param string $shopLat
     */
    public function setShopLat(?string $shopLat): void
    {
        $this->shopLat = $shopLat;
    }

    /**
     * @return int
     */
    public function getShopPositionSource(): ?int
    {
        return $this->shopPositionSource;
    }

    /**
     * @param int $shopPositionSource
     */
    public function setShopPositionSource(?int $shopPositionSource): void
    {
        $this->shopPositionSource = $shopPositionSource;
    }

    /**
     * @return string
     */
    public function getShopContactName(): ?string
    {
        return $this->shopContactName;
    }

    /**
     * @param string $shopContactName
     */
    public function setShopContactName(?string $shopContactName): void
    {
        $this->shopContactName = $shopContactName;
    }

    /**
     * @return string
     */
    public function getShopContactPhone(): ?string
    {
        return $this->shopContactPhone;
    }

    /**
     * @param string $shopContactPhone
     */
    public function setShopContactPhone(?string $shopContactPhone): void
    {
        $this->shopContactPhone = $shopContactPhone;
    }

    /**
     * @return string
     */
    public function getConsigneeAddress(): ?string
    {
        return $this->consigneeAddress;
    }

    /**
     * @param string $consigneeAddress
     */
    public function setConsigneeAddress(?string $consigneeAddress): void
    {
        $this->consigneeAddress = $consigneeAddress;
    }

    /**
     * @return string
     */
    public function getConsigneeLng(): ?string
    {
        return $this->consigneeLng;
    }

    /**
     * @param string $consigneeLng
     */
    public function setConsigneeLng(?string $consigneeLng): void
    {
        $this->consigneeLng = $consigneeLng;
    }

    /**
     * @return string
     */
    public function getConsigneeLat(): ?string
    {
        return $this->consigneeLat;
    }

    /**
     * @param string $consigneeLat
     */
    public function setConsigneeLat(?string $consigneeLat): void
    {
        $this->consigneeLat = $consigneeLat;
    }

    /**
     * @return int
     */
    public function getConsigneePositionSource(): ?int
    {
        return $this->consigneePositionSource;
    }

    /**
     * @param int $consigneePositionSource
     */
    public function setConsigneePositionSource(?int $consigneePositionSource): void
    {
        $this->consigneePositionSource = $consigneePositionSource;
    }

    /**
     * @return string
     */
    public function getConsigneeName(): ?string
    {
        return $this->consigneeName;
    }

    /**
     * @param string $consigneeName
     */
    public function setConsigneeName(?string $consigneeName): void
    {
        $this->consigneeName = $consigneeName;
    }

    /**
     * @return string
     */
    public function getConsigneePhone(): ?string
    {
        return $this->consigneePhone;
    }

    /**
     * @param string $consigneePhone
     */
    public function setConsigneePhone(?string $consigneePhone): void
    {
        $this->consigneePhone = $consigneePhone;
    }

    /**
     * @return int
     */
    public function getExpectFetchTime(): ?int
    {
        return $this->expectFetchTime;
    }

    /**
     * @param int $expectFetchTime
     */
    public function setExpectFetchTime(?int $expectFetchTime): void
    {
        $this->expectFetchTime = $expectFetchTime;
    }

    /**
     * @return int
     */
    public function getTips(): ?int
    {
        return $this->tips;
    }

    /**
     * @param int $tips
     */
    public function setTips(?int $tips): void
    {
        $this->tips = $tips;
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
    public function getOutOrderNo(): ?string
    {
        return $this->outOrderNo;
    }

    /**
     * @param string $outOrderNo
     */
    public function setOutOrderNo(?string $outOrderNo): void
    {
        $this->outOrderNo = $outOrderNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}