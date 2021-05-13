<?php

namespace Com\Youzan\Cloud\Extension\Param\Common;



/**
 * 
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class Shop implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $shopId;

    /**
     * 
     * @var int
     */
    private $hqShopId;

    /**
     * 
     * @var int
     */
    private $rootShopId;

    /**
     * 
     * @var array
     */
    private $inheritedShopIdsWithSelf;

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var int
     */
    private $type;

    /**
     * 
     * @var int
     */
    private $shopRole;

    /**
     * 
     * @var bool
     */
    private $onlineShopOpen;

    /**
     * 
     * @var int
     */
    private $lockStatus;

    /**
     * 
     * @var bool
     */
    private $weChatServer;



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
    public function getHqShopId(): ?int
    {
        return $this->hqShopId;
    }

    /**
     * @param int $hqShopId
     */
    public function setHqShopId(?int $hqShopId): void
    {
        $this->hqShopId = $hqShopId;
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

    /**
     * @return bool
     */
    public function getOnlineShopOpen(): ?bool
    {
        return $this->onlineShopOpen;
    }

    /**
     * @param bool $onlineShopOpen
     */
    public function setOnlineShopOpen(?bool $onlineShopOpen): void
    {
        $this->onlineShopOpen = $onlineShopOpen;
    }

    /**
     * @return int
     */
    public function getLockStatus(): ?int
    {
        return $this->lockStatus;
    }

    /**
     * @param int $lockStatus
     */
    public function setLockStatus(?int $lockStatus): void
    {
        $this->lockStatus = $lockStatus;
    }

    /**
     * @return bool
     */
    public function getWeChatServer(): ?bool
    {
        return $this->weChatServer;
    }

    /**
     * @param bool $weChatServer
     */
    public function setWeChatServer(?bool $weChatServer): void
    {
        $this->weChatServer = $weChatServer;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}