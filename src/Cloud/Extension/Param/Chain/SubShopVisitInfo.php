<?php

namespace Com\Youzan\Cloud\Extension\Param\Chain;

use Com\Youzan\Cloud\Extension\Param\Common\Address;
use Com\Youzan\Cloud\Extension\Param\Common\Manager;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\Info\ShopMetaInfo;

/**
 * 
 * @author Baymax
 * @create 2020-03-19 10:50:21.0
 */
class SubShopVisitInfo implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $kdtId;

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
     * @var string
     */
    private $logo;

    /**
     * 
     * @var int
     */
    private $shopRole;

    /**
     * 
     * @var int
     */
    private $joinType;

    /**
     * 
     * @var Address
     */
    private $address;

    /**
     * 
     * @var Manager
     */
    private $manager;

    /**
     * 
     * @var string
     */
    private $lifecycleStatus;

    /**
     * 
     * @var int
     */
    private $lifecycleEndTime;

    /**
     * 
     * @var int
     */
    private $staffNum;

    /**
     * 
     * @var int
     */
    private $distance;

    /**
     * 
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
     * @return Manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * @param Manager $manager
     */
    public function setManager(Manager $manager): void
    {
        $this->manager = $manager;
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
    public function getStaffNum(): int
    {
        return $this->staffNum;
    }

    /**
     * @param int $staffNum
     */
    public function setStaffNum(int $staffNum): void
    {
        $this->staffNum = $staffNum;
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