<?php

namespace Com\Youzan\Cloud\Extension\Param\Info;



/**
 * 仅appendShopMetaInfo&#x3D;true时有值
 * @author Baymax
 * @create 2020-03-19 10:50:21.0
 */
class ShopMetaInfo implements \JsonSerializable {

    /**
     * 店铺kdtId
     * @var int
     */
    private $kdtId;

    /**
     * 店铺名称
     * @var string
     */
    private $shopName;

    /**
     * 店铺锁定状态：0正常 1锁定 9删除
     * @var int
     */
    private $lockStatus;

    /**
     * 
     * @var int
     */
    private $shopType;

    /**
     * 
     * @var int
     */
    private $shopRole;

    /**
     * 
     * @var int
     */
    private $parentKdtId;

    /**
     * 
     * @var int
     */
    private $rootKdtId;

    /**
     * 
     * @var int
     */
    private $chainOnlineShopMode;

    /**
     * 
     * @var bool
     */
    private $onlineShopOpen;

    /**
     * 
     * @var int
     */
    private $shopTopic;

    /**
     * 
     * @var bool
     */
    private $offlineShopOpen;

    /**
     * 
     * @var int
     */
    private $saasSolution;

    /**
     * 
     * @var int
     */
    private $joinType;

    /**
     * 
     * @var int
     */
    private $subSolution;



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
    public function getLockStatus(): int
    {
        return $this->lockStatus;
    }

    /**
     * @param int $lockStatus
     */
    public function setLockStatus(int $lockStatus): void
    {
        $this->lockStatus = $lockStatus;
    }

    /**
     * @return int
     */
    public function getShopType(): int
    {
        return $this->shopType;
    }

    /**
     * @param int $shopType
     */
    public function setShopType(int $shopType): void
    {
        $this->shopType = $shopType;
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
    public function getParentKdtId(): int
    {
        return $this->parentKdtId;
    }

    /**
     * @param int $parentKdtId
     */
    public function setParentKdtId(int $parentKdtId): void
    {
        $this->parentKdtId = $parentKdtId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return int
     */
    public function getChainOnlineShopMode(): int
    {
        return $this->chainOnlineShopMode;
    }

    /**
     * @param int $chainOnlineShopMode
     */
    public function setChainOnlineShopMode(int $chainOnlineShopMode): void
    {
        $this->chainOnlineShopMode = $chainOnlineShopMode;
    }

    /**
     * @return bool
     */
    public function getOnlineShopOpen(): bool
    {
        return $this->onlineShopOpen;
    }

    /**
     * @param bool $onlineShopOpen
     */
    public function setOnlineShopOpen(bool $onlineShopOpen): void
    {
        $this->onlineShopOpen = $onlineShopOpen;
    }

    /**
     * @return int
     */
    public function getShopTopic(): int
    {
        return $this->shopTopic;
    }

    /**
     * @param int $shopTopic
     */
    public function setShopTopic(int $shopTopic): void
    {
        $this->shopTopic = $shopTopic;
    }

    /**
     * @return bool
     */
    public function getOfflineShopOpen(): bool
    {
        return $this->offlineShopOpen;
    }

    /**
     * @param bool $offlineShopOpen
     */
    public function setOfflineShopOpen(bool $offlineShopOpen): void
    {
        $this->offlineShopOpen = $offlineShopOpen;
    }

    /**
     * @return int
     */
    public function getSaasSolution(): int
    {
        return $this->saasSolution;
    }

    /**
     * @param int $saasSolution
     */
    public function setSaasSolution(int $saasSolution): void
    {
        $this->saasSolution = $saasSolution;
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
     * @return int
     */
    public function getSubSolution(): int
    {
        return $this->subSolution;
    }

    /**
     * @param int $subSolution
     */
    public function setSubSolution(int $subSolution): void
    {
        $this->subSolution = $subSolution;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}