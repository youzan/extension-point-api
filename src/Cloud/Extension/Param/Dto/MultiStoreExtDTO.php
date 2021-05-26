<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\AddressExtDTO;
use Com\Youzan\Cloud\Extension\Param\Store\PhoneDTO;
use Com\Youzan\Cloud\Extension\Param\Store\BusinessTimeSettingDTO;
use Com\Youzan\Cloud\Extension\Param\Store\DayCrossBizTimeSettingDTO;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\Store\OfflineBusinessSettingDTO;

/**
 * 
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class MultiStoreExtDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $id;

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var AddressExtDTO
     */
    private $address;

    /**
     * 
     * @var PhoneDTO
     */
    private $phone;

    /**
     * 
     * @var bool
     */
    private $selfFetchTimeRequired;

    /**
     * 
     * @var BusinessTimeSettingDTO
     */
    private $businessTimeSetting;

    /**
     * 
     * @var DayCrossBizTimeSettingDTO
     */
    private $bizTimeSetting;

    /**
     * 
     * @var bool
     */
    private $superStore;

    /**
     * 
     * @var array
     */
    private $images;

    /**
     * 
     * @var bool
     */
    private $isStore;

    /**
     * 
     * @var bool
     */
    private $mainStore;

    /**
     * 
     * @var bool
     */
    private $isSelfFetch;

    /**
     * 
     * @var bool
     */
    private $isOnline;

    /**
     * 
     * @var PhoneDTO
     */
    private $phoneDTO;

    /**
     * 
     * @var bool
     */
    private $opening;

    /**
     * 
     * @var int
     */
    private $createdAt;

    /**
     * 
     * @var int
     */
    private $updatedAt;

    /**
     * 
     * @var string
     */
    private $distance;

    /**
     * 
     * @var int
     */
    private $status;

    /**
     * 
     * @var array
     */
    private $tagIds;

    /**
     * 
     * @var int
     */
    private $supportLocalDelivery;

    /**
     * 
     * @var string
     */
    private $description;

    /**
     * 
     * @var bool
     */
    private $isValid;

    /**
     * 
     * @var bool
     */
    private $useThirdPartyDelivery;

    /**
     * 
     * @var int
     */
    private $thirdPartyDeliveryBusiness;

    /**
     * 
     * @var string
     */
    private $businessTimeSettingString;

    /**
     * 
     * @var string
     */
    private $outerId;

    /**
     * 
     * @var OfflineBusinessSettingDTO
     */
    private $offlineBusinessHours;

    /**
     * 
     * @var string
     */
    private $summary;



    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
     * @return bool
     */
    public function getSuperStore(): ?bool
    {
        return $this->superStore;
    }

    /**
     * @param bool $superStore
     */
    public function setSuperStore(?bool $superStore): void
    {
        $this->superStore = $superStore;
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
    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    /**
     * @param bool $isValid
     */
    public function setIsValid(?bool $isValid): void
    {
        $this->isValid = $isValid;
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
     * @return string
     */
    public function getOuterId(): ?string
    {
        return $this->outerId;
    }

    /**
     * @param string $outerId
     */
    public function setOuterId(?string $outerId): void
    {
        $this->outerId = $outerId;
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