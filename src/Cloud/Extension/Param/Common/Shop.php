<?php

namespace Com\Youzan\Cloud\Extension\Param\Common;



/**
 * 店铺信息
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class Shop implements \JsonSerializable {

    /**
     * 店铺ID
     * @var int
     */
    private $shopId;

    /**
     * 总店店铺ID，若单店铺则为单店铺ID
     * @var int
     */
    private $rootShopId;

    /**
     * 包含当前下单店铺的上级所有店铺ID列表
     * @var array
     */
    private $inheritedShopIdsWithSelf;

    /**
     * 当前下单店铺名称
     * @var string
     */
    private $name;

    /**
     * 下单店铺类型，微商城（0），零售（7）等
     * @var int
     */
    private $type;

    /**
     * 下单店铺角色，单店（0），总店（1），分店（2）等
     * @var int
     */
    private $shopRole;



    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(?int $shopId): void
    {
        $this->shopId = $shopId;
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
     * @return array
     */
    public function getInheritedShopIdsWithSelf(): ?array
    {
        return $this->inheritedShopIdsWithSelf;
    }

    /**
     * @param array $inheritedShopIdsWithSelf
     */
    public function setInheritedShopIdsWithSelf(?array $inheritedShopIdsWithSelf): void
    {
        $this->inheritedShopIdsWithSelf = $inheritedShopIdsWithSelf;
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
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}