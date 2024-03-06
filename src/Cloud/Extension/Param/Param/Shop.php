<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class Shop implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $currentShopId;

    /**
     *  
     * @var int
     */
    private $rootShopId;

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
     * @var array
     */
    private $inheritedShopIds;

    /**
     *  
     * @var int
     */
    private $offlineId;



    /**
     * @return int
     */
    public function getCurrentShopId(): ?int
    {
        return $this->currentShopId;
    }

    /**
     * @param int $currentShopId
     */
    public function setCurrentShopId(?int $currentShopId): void
    {
        $this->currentShopId = $currentShopId;
    }

    /**
     * @return int
     */
    public function getRootShopId(): ?int
    {
        return $this->rootShopId;
    }

    /**
     * @param int $rootShopId
     */
    public function setRootShopId(?int $rootShopId): void
    {
        $this->rootShopId = $rootShopId;
    }

    /**
     * @return int
     */
    public function getShopType(): ?int
    {
        return $this->shopType;
    }

    /**
     * @param int $shopType
     */
    public function setShopType(?int $shopType): void
    {
        $this->shopType = $shopType;
    }

    /**
     * @return int
     */
    public function getShopRole(): ?int
    {
        return $this->shopRole;
    }

    /**
     * @param int $shopRole
     */
    public function setShopRole(?int $shopRole): void
    {
        $this->shopRole = $shopRole;
    }

    /**
     * @return array
     */
    public function getInheritedShopIds(): ?array
    {
        return $this->inheritedShopIds;
    }

    /**
     * @param array $inheritedShopIds
     */
    public function setInheritedShopIds(?array $inheritedShopIds): void
    {
        $this->inheritedShopIds = $inheritedShopIds;
    }

    /**
     * @return int
     */
    public function getOfflineId(): ?int
    {
        return $this->offlineId;
    }

    /**
     * @param int $offlineId
     */
    public function setOfflineId(?int $offlineId): void
    {
        $this->offlineId = $offlineId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}