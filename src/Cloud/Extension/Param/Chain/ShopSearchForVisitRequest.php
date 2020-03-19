<?php

namespace Com\Youzan\Cloud\Extension\Param\Chain;



/**
 * 
 * @author Baymax
 * @create 2020-03-19 10:50:21.0
 */
class ShopSearchForVisitRequest implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $umpAlias;

    /**
     * 
     * @var string
     */
    private $umpType;

    /**
     * 
     * @var int
     */
    private $hqKdtId;

    /**
     * 
     * @var string
     */
    private $shopName;

    /**
     * 
     * @var int
     */
    private $buyerId;

    /**
     * 
     * @var array
     */
    private $joinTypes;

    /**
     * 
     * @var array
     */
    private $shopLifecycleStatuses;

    /**
     * 
     * @var string
     */
    private $sortName;

    /**
     * 
     * @var int
     */
    private $sortType;

    /**
     * 
     * @var array
     */
    private $shopRoleList;

    /**
     * 
     * @var string
     */
    private $province;

    /**
     * 
     * @var string
     */
    private $city;

    /**
     * 
     * @var string
     */
    private $lng;

    /**
     * 
     * @var string
     */
    private $lat;

    /**
     * 
     * @var bool
     */
    private $onlineOpen;

    /**
     * 
     * @var bool
     */
    private $offlineOpen;

    /**
     * 
     * @var bool
     */
    private $appendShopMetaInfo;

    /**
     * 
     * @var array
     */
    private $excludeKdtIds;

    /**
     * 
     * @var int
     */
    private $pageNum;

    /**
     * 
     * @var int
     */
    private $pageSize;

    /**
     * 
     * @var array
     */
    private $kdtIds;

    /**
     * 
     * @var bool
     */
    private $isShowOnlineShopSwitch;



    /**
     * @return string
     */
    public function getUmpAlias(): string
    {
        return $this->umpAlias;
    }

    /**
     * @param string $umpAlias
     */
    public function setUmpAlias(string $umpAlias): void
    {
        $this->umpAlias = $umpAlias;
    }

    /**
     * @return string
     */
    public function getUmpType(): string
    {
        return $this->umpType;
    }

    /**
     * @param string $umpType
     */
    public function setUmpType(string $umpType): void
    {
        $this->umpType = $umpType;
    }

    /**
     * @return int
     */
    public function getHqKdtId(): int
    {
        return $this->hqKdtId;
    }

    /**
     * @param int $hqKdtId
     */
    public function setHqKdtId(int $hqKdtId): void
    {
        $this->hqKdtId = $hqKdtId;
    }

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
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return array
     */
    public function getJoinTypes(): array
    {
        return $this->joinTypes;
    }

    /**
     * @param array $joinTypes
     */
    public function setJoinTypes(array $joinTypes): void
    {
        $this->joinTypes = $joinTypes;
    }

    /**
     * @return array
     */
    public function getShopLifecycleStatuses(): array
    {
        return $this->shopLifecycleStatuses;
    }

    /**
     * @param array $shopLifecycleStatuses
     */
    public function setShopLifecycleStatuses(array $shopLifecycleStatuses): void
    {
        $this->shopLifecycleStatuses = $shopLifecycleStatuses;
    }

    /**
     * @return string
     */
    public function getSortName(): string
    {
        return $this->sortName;
    }

    /**
     * @param string $sortName
     */
    public function setSortName(string $sortName): void
    {
        $this->sortName = $sortName;
    }

    /**
     * @return int
     */
    public function getSortType(): int
    {
        return $this->sortType;
    }

    /**
     * @param int $sortType
     */
    public function setSortType(int $sortType): void
    {
        $this->sortType = $sortType;
    }

    /**
     * @return array
     */
    public function getShopRoleList(): array
    {
        return $this->shopRoleList;
    }

    /**
     * @param array $shopRoleList
     */
    public function setShopRoleList(array $shopRoleList): void
    {
        $this->shopRoleList = $shopRoleList;
    }

    /**
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince(string $province): void
    {
        $this->province = $province;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
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
     * @return bool
     */
    public function getOnlineOpen(): bool
    {
        return $this->onlineOpen;
    }

    /**
     * @param bool $onlineOpen
     */
    public function setOnlineOpen(bool $onlineOpen): void
    {
        $this->onlineOpen = $onlineOpen;
    }

    /**
     * @return bool
     */
    public function getOfflineOpen(): bool
    {
        return $this->offlineOpen;
    }

    /**
     * @param bool $offlineOpen
     */
    public function setOfflineOpen(bool $offlineOpen): void
    {
        $this->offlineOpen = $offlineOpen;
    }

    /**
     * @return bool
     */
    public function getAppendShopMetaInfo(): bool
    {
        return $this->appendShopMetaInfo;
    }

    /**
     * @param bool $appendShopMetaInfo
     */
    public function setAppendShopMetaInfo(bool $appendShopMetaInfo): void
    {
        $this->appendShopMetaInfo = $appendShopMetaInfo;
    }

    /**
     * @return array
     */
    public function getExcludeKdtIds(): array
    {
        return $this->excludeKdtIds;
    }

    /**
     * @param array $excludeKdtIds
     */
    public function setExcludeKdtIds(array $excludeKdtIds): void
    {
        $this->excludeKdtIds = $excludeKdtIds;
    }

    /**
     * @return int
     */
    public function getPageNum(): int
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageNum
     */
    public function setPageNum(int $pageNum): void
    {
        $this->pageNum = $pageNum;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return array
     */
    public function getKdtIds(): array
    {
        return $this->kdtIds;
    }

    /**
     * @param array $kdtIds
     */
    public function setKdtIds(array $kdtIds): void
    {
        $this->kdtIds = $kdtIds;
    }

    /**
     * @return bool
     */
    public function getIsShowOnlineShopSwitch(): bool
    {
        return $this->isShowOnlineShopSwitch;
    }

    /**
     * @param bool $isShowOnlineShopSwitch
     */
    public function setIsShowOnlineShopSwitch(bool $isShowOnlineShopSwitch): void
    {
        $this->isShowOnlineShopSwitch = $isShowOnlineShopSwitch;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}