<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 店铺信息
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class ShopParam implements \JsonSerializable {

    /**
     * 当前店铺ID
     * @var int
     */
    private $currentShopId;

    /**
     * 总店店铺ID
     * @var int
     */
    private $rootShopId;

    /**
     * 下单店铺类型，微商城（0），零售（7）
     * @var int
     */
    private $shopType;

    /**
     * 下单店铺角色，单店（0），总店（1），分店（2）
     * @var int
     */
    private $shopRole;

    /**
     * 上级店铺ID列表
     * @var array
     */
    private $inheritedShopIds;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}