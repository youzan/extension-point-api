<?php

namespace Com\Youzan\Cloud\Extension\Param\Chain;

use Com\Youzan\Cloud\Extension\Param\Common\Address;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\Info\ShopMetaInfo;

/**
 * 
 * @author Baymax
 * @create Thu Mar 19 10:50:21 CST 2020
 */
class SubShopVisitInfo implements \JsonSerializable {

    /**
     * 店铺kdtId
     * @var int
     */
    private $kdtId;

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
     * 店铺logo url
     * @var string
     */
    private $logo;

    /**
     * 店铺角色列表：2 表示门店或网店。当前只有2
     * @var int
     */
    private $shopRole;

    /**
     * 经营模式：1 直营，2 加盟
     * @var int
     */
    private $joinType;

    /**
     * 
     * @var Address
     */
    private $address;

    /**
     * 店铺生命周期阶段：try 试用期，valid 有效期，protect 保护期，close 打烊
     * @var string
     */
    private $lifecycleStatus;

    /**
     * 当前生命周期阶段结束时间
     * @var int
     */
    private $lifecycleEndTime;

    /**
     * 距离，单位m
     * @var int
     */
    private $distance;

    /**
     * 仅appendShopMetaInfo&#x3D;true时有值
     * @var ShopMetaInfo
     */
    private $shopMetaInfo;



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
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return int
     */
    public function getShopRole(): int
    {
        return $this->shopRole;
    }

    /**
     * @param int $shopRole
     */
    public function setShopRole(int $shopRole): void
    {
        $this->shopRole = $shopRole;
    }

    /**
     * @return int
     */
    public function getJoinType(): int
    {
        return $this->joinType;
    }

    /**
     * @param int $joinType
     */
    public function setJoinType(int $joinType): void
    {
        $this->joinType = $joinType;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getLifecycleStatus(): string
    {
        return $this->lifecycleStatus;
    }

    /**
     * @param string $lifecycleStatus
     */
    public function setLifecycleStatus(string $lifecycleStatus): void
    {
        $this->lifecycleStatus = $lifecycleStatus;
    }

    /**
     * @return int
     */
    public function getLifecycleEndTime(): int
    {
        return $this->lifecycleEndTime;
    }

    /**
     * @param int $lifecycleEndTime
     */
    public function setLifecycleEndTime(int $lifecycleEndTime): void
    {
        $this->lifecycleEndTime = $lifecycleEndTime;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function setDistance(int $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return ShopMetaInfo
     */
    public function getShopMetaInfo(): ShopMetaInfo
    {
        return $this->shopMetaInfo;
    }

    /**
     * @param ShopMetaInfo $shopMetaInfo
     */
    public function setShopMetaInfo(ShopMetaInfo $shopMetaInfo): void
    {
        $this->shopMetaInfo = $shopMetaInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}