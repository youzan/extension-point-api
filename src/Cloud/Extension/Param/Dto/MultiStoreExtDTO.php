<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\AddressExtDTO;
use Com\Youzan\Cloud\Extension\Param\Store\PhoneDTO;
use Com\Youzan\Cloud\Extension\Param\Store\BusinessTimeSettingDTO;
use Com\Youzan\Cloud\Extension\Param\Store\DayCrossBizTimeSettingDTO;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\Store\OfflineBusinessSettingDTO;

/**
 * 网点列表详情
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class MultiStoreExtDTO implements \JsonSerializable {

    /**
     * 网店ID
     * @var int
     */
    private $offline_id;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 网店名称
     * @var string
     */
    private $offline_name;

    /**
     * 地址信息
     * @var AddressExtDTO
     */
    private $address;

    /**
     * 
     * @var PhoneDTO
     */
    private $phone;

    /**
     * 是否开启买家自选取时间
     * @var bool
     */
    private $selfFetchTimeRequired;

    /**
     * 
     * @var BusinessTimeSettingDTO
     */
    private $businessTimeSetting;

    /**
     * 新版支持跨天的营业时间
     * @var DayCrossBizTimeSettingDTO
     */
    private $bizTimeSetting;

    /**
     * 图片地址
     * @var array
     */
    private $images;

    /**
     * 是否是门店
     * @var bool
     */
    private $isStore;

    /**
     * 是否是总店
     * @var bool
     */
    private $mainStore;

    /**
     * 是否是自提点
     * @var bool
     */
    private $isSelfFetch;

    /**
     * 是否是线上网店
     * @var bool
     */
    private $isOnline;

    /**
     * 网点号码信息
     * @var PhoneDTO
     */
    private $phoneDTO;

    /**
     * 当前是否是营业
     * @var bool
     */
    private $opening;

    /**
     * 创建时间，格式：
     * @var int
     */
    private $createdAt;

    /**
     * 更新时间，格式：
     * @var int
     */
    private $updatedAt;

    /**
     * 到网点的距离（查询传了合法的经纬度才会设值，单位米）
     * @var string
     */
    private $distance;

    /**
     * 网点是否开启的状态
     * @var int
     */
    private $status;

    /**
     * 网点所属的标签列表
     * @var array
     */
    private $tagIds;

    /**
     * 是否支持本地配送  0:不支持，1：支持
     * @var int
     */
    private $supportLocalDelivery;

    /**
     * 描述
     * @var string
     */
    private $description;

    /**
     * 网店是否有效（未被删除）
     * @var bool
     */
    private $offline_isValid;

    /**
     * 是否开启第三方配送
     * @var bool
     */
    private $useThirdPartyDelivery;

    /**
     * 第三方配送类型
     * @var int
     */
    private $thirdPartyDeliveryBusiness;

    /**
     * 营业时间字符串
     * @var string
     */
    private $businessTimeSettingString;

    /**
     * 营业时间设置，该字段已经交给物流维护
     * @var OfflineBusinessSettingDTO
     */
    private $offlineBusinessHours;

    /**
     * 前端营业时间展示文案
     * @var string
     */
    private $summary;



    /**
     * @return int
     */
    public function getOffline_id(): ?int
    {
        return $this->offline_id;
    }

    /**
     * @param int $offline_id
     */
    public function setOffline_id(?int $offline_id): void
    {
        $this->offline_id = $offline_id;
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
    public function getOffline_name(): ?string
    {
        return $this->offline_name;
    }

    /**
     * @param string $offline_name
     */
    public function setOffline_name(?string $offline_name): void
    {
        $this->offline_name = $offline_name;
    }

    /**
     * @return AddressExtDTO
     */
    public function getAddress(): ?AddressExtDTO
    {
        return $this->address;
    }

    /**
     * @param AddressExtDTO $address
     */
    public function setAddress(?AddressExtDTO $address): void
    {
        $this->address = $address;
    }

    /**
     * @return PhoneDTO
     */
    public function getPhone(): ?PhoneDTO
    {
        return $this->phone;
    }

    /**
     * @param PhoneDTO $phone
     */
    public function setPhone(?PhoneDTO $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return bool
     */
    public function getSelfFetchTimeRequired(): ?bool
    {
        return $this->selfFetchTimeRequired;
    }

    /**
     * @param bool $selfFetchTimeRequired
     */
    public function setSelfFetchTimeRequired(?bool $selfFetchTimeRequired): void
    {
        $this->selfFetchTimeRequired = $selfFetchTimeRequired;
    }

    /**
     * @return BusinessTimeSettingDTO
     */
    public function getBusinessTimeSetting(): ?BusinessTimeSettingDTO
    {
        return $this->businessTimeSetting;
    }

    /**
     * @param BusinessTimeSettingDTO $businessTimeSetting
     */
    public function setBusinessTimeSetting(?BusinessTimeSettingDTO $businessTimeSetting): void
    {
        $this->businessTimeSetting = $businessTimeSetting;
    }

    /**
     * @return DayCrossBizTimeSettingDTO
     */
    public function getBizTimeSetting(): ?DayCrossBizTimeSettingDTO
    {
        return $this->bizTimeSetting;
    }

    /**
     * @param DayCrossBizTimeSettingDTO $bizTimeSetting
     */
    public function setBizTimeSetting(?DayCrossBizTimeSettingDTO $bizTimeSetting): void
    {
        $this->bizTimeSetting = $bizTimeSetting;
    }

    /**
     * @return array
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages(?array $images): void
    {
        $this->images = $images;
    }

    /**
     * @return bool
     */
    public function getIsStore(): ?bool
    {
        return $this->isStore;
    }

    /**
     * @param bool $isStore
     */
    public function setIsStore(?bool $isStore): void
    {
        $this->isStore = $isStore;
    }

    /**
     * @return bool
     */
    public function getMainStore(): ?bool
    {
        return $this->mainStore;
    }

    /**
     * @param bool $mainStore
     */
    public function setMainStore(?bool $mainStore): void
    {
        $this->mainStore = $mainStore;
    }

    /**
     * @return bool
     */
    public function getIsSelfFetch(): ?bool
    {
        return $this->isSelfFetch;
    }

    /**
     * @param bool $isSelfFetch
     */
    public function setIsSelfFetch(?bool $isSelfFetch): void
    {
        $this->isSelfFetch = $isSelfFetch;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): ?bool
    {
        return $this->isOnline;
    }

    /**
     * @param bool $isOnline
     */
    public function setIsOnline(?bool $isOnline): void
    {
        $this->isOnline = $isOnline;
    }

    /**
     * @return PhoneDTO
     */
    public function getPhoneDTO(): ?PhoneDTO
    {
        return $this->phoneDTO;
    }

    /**
     * @param PhoneDTO $phoneDTO
     */
    public function setPhoneDTO(?PhoneDTO $phoneDTO): void
    {
        $this->phoneDTO = $phoneDTO;
    }

    /**
     * @return bool
     */
    public function getOpening(): ?bool
    {
        return $this->opening;
    }

    /**
     * @param bool $opening
     */
    public function setOpening(?bool $opening): void
    {
        $this->opening = $opening;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt(?int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getUpdatedAt(): ?int
    {
        return $this->updatedAt;
    }

    /**
     * @param int $updatedAt
     */
    public function setUpdatedAt(?int $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getDistance(): ?string
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     */
    public function setDistance(?string $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getTagIds(): ?array
    {
        return $this->tagIds;
    }

    /**
     * @param array $tagIds
     */
    public function setTagIds(?array $tagIds): void
    {
        $this->tagIds = $tagIds;
    }

    /**
     * @return int
     */
    public function getSupportLocalDelivery(): ?int
    {
        return $this->supportLocalDelivery;
    }

    /**
     * @param int $supportLocalDelivery
     */
    public function setSupportLocalDelivery(?int $supportLocalDelivery): void
    {
        $this->supportLocalDelivery = $supportLocalDelivery;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function getOffline_isValid(): ?bool
    {
        return $this->offline_isValid;
    }

    /**
     * @param bool $offline_isValid
     */
    public function setOffline_isValid(?bool $offline_isValid): void
    {
        $this->offline_isValid = $offline_isValid;
    }

    /**
     * @return bool
     */
    public function getUseThirdPartyDelivery(): ?bool
    {
        return $this->useThirdPartyDelivery;
    }

    /**
     * @param bool $useThirdPartyDelivery
     */
    public function setUseThirdPartyDelivery(?bool $useThirdPartyDelivery): void
    {
        $this->useThirdPartyDelivery = $useThirdPartyDelivery;
    }

    /**
     * @return int
     */
    public function getThirdPartyDeliveryBusiness(): ?int
    {
        return $this->thirdPartyDeliveryBusiness;
    }

    /**
     * @param int $thirdPartyDeliveryBusiness
     */
    public function setThirdPartyDeliveryBusiness(?int $thirdPartyDeliveryBusiness): void
    {
        $this->thirdPartyDeliveryBusiness = $thirdPartyDeliveryBusiness;
    }

    /**
     * @return string
     */
    public function getBusinessTimeSettingString(): ?string
    {
        return $this->businessTimeSettingString;
    }

    /**
     * @param string $businessTimeSettingString
     */
    public function setBusinessTimeSettingString(?string $businessTimeSettingString): void
    {
        $this->businessTimeSettingString = $businessTimeSettingString;
    }

    /**
     * @return OfflineBusinessSettingDTO
     */
    public function getOfflineBusinessHours(): ?OfflineBusinessSettingDTO
    {
        return $this->offlineBusinessHours;
    }

    /**
     * @param OfflineBusinessSettingDTO $offlineBusinessHours
     */
    public function setOfflineBusinessHours(?OfflineBusinessSettingDTO $offlineBusinessHours): void
    {
        $this->offlineBusinessHours = $offlineBusinessHours;
    }

    /**
     * @return string
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary(?string $summary): void
    {
        $this->summary = $summary;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}