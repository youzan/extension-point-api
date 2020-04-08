<?php

namespace Com\Youzan\Cloud\Extension\Param\Chain;



/**
 * 
 * @author Baymax
 * @create Thu Mar 19 10:50:21 CST 2020
 */
class ShopSearchForVisitRequest implements \JsonSerializable {

    /**
     * 营销活动别名（将根据活动支持的店铺过滤）。只要透传该参数
     * @var string
     */
    private $umpAlias;

    /**
     * 营销活动类型（将根据活动支持的店铺过滤）：collectgift 收藏有礼，checkin 日历签到；只要透传该参数
     * @var string
     */
    private $umpType;

    /**
     * 总部kdtId
     * @var int
     */
    private $hqKdtId;

    /**
     * 店铺名称
     * @var string
     */
    private $shopName;

    /**
     * 买家openId
     * @var string
     */
    private $yzOpenId;

    /**
     * 经营模式：1直营，2加盟
     * @var array
     */
    private $joinTypes;

    /**
     * 店铺生命周期：try 试用期，valid 有效期，protect 保护期，close 打烊。一般不展示打烊的店铺
     * @var array
     */
    private $shopLifecycleStatuses;

    /**
     * 1 升序 2 降序
     * @var int
     */
    private $sortType;

    /**
     * 店铺角色列表：2 表示门店或网店。当前只有2
     * @var array
     */
    private $shopRoleList;

    /**
     * 店铺所在省份
     * @var string
     */
    private $province;

    /**
     * 店铺所在城市
     * @var string
     */
    private $city;

    /**
     * 买家位置经度，百度坐标系
     * @var string
     */
    private $lng;

    /**
     * 买家位置纬度，百度坐标系
     * @var string
     */
    private $lat;

    /**
     * 是否开启网店：true开启，false关闭。用于区分shopRole&#x3D;2的店铺
     * @var bool
     */
    private $onlineOpen;

    /**
     * 是否开启线下店：true开启，false关闭。用于区分shopRole&#x3D;2的店铺
     * @var bool
     */
    private $offlineOpen;

    /**
     * 返回值是否填充店铺元数据，true 填充，false 不填充。只要透传该参数
     * @var bool
     */
    private $appendShopMetaInfo;

    /**
     * 排除店铺kdtId列表
     * @var array
     */
    private $excludeKdtIds;

    /**
     * 页码。从1到100。
     * @var int
     */
    private $pageNum;

    /**
     * 每页条数，最大100
     * @var int
     */
    private $pageSize;

    /**
     * 指定店铺kdtId列表
     * @var array
     */
    private $kdtIds;

    /**
     * 是否展示网店切换，针对网店的补充条件
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
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
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