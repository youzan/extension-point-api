<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\AddressExtDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\PhoneExtDTO;
use DateTime;

/**
 * 查询到的自提点列表数据
 * @author Baymax
 * @create 2021-01-22 10:18:32.0
 */
class SelfFetchPointInfoExtDTO implements \JsonSerializable {

    /**
     * 自提点ID
     * @var int
     */
    private $storeId;

    /**
     * 自提点名称
     * @var string
     */
    private $name;

    /**
     * 自提点描述
     * @var string
     */
    private $description;

    /**
     * 自提点地址信息对象
     * @var AddressExtDTO
     */
    private $addressInfo;

    /**
     * 号码信息
     * @var PhoneExtDTO
     */
    private $phone;

    /**
     * 是否开启买家自选提取时间
     * @var bool
     */
    private $selfFetchTimeRequired;

    /**
     * 距离
     * @var string
     */
    private $distance;

    /**
     * 是否是超级门店
     * @var bool
     */
    private $superStore;

    /**
     * 商品售出状态
     * @var int
     */
    private $orderSoldStatus;

    /**
     * 图片地址，用逗号分割
     * @var string
     */
    private $image;

    /**
     * 创建时间
     * @var int
     */
    private $createdAt;

    /**
     * 更新时间
     * @var int
     */
    private $updatedAt;

    /**
     * 是否最近使用
     * @var bool
     */
    private $recentlyUsed;

    /**
     * 是否线下门店
     * @var bool
     */
    private $isStore;

    /**
     * 是否是线上网点
     * @var bool
     */
    private $isOnline;



    /**
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }

    /**
     * @param int $storeId
     */
    public function setStoreId(int $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return AddressExtDTO
     */
    public function getAddressInfo(): AddressExtDTO
    {
        return $this->addressInfo;
    }

    /**
     * @param AddressExtDTO $addressInfo
     */
    public function setAddressInfo(AddressExtDTO $addressInfo): void
    {
        $this->addressInfo = $addressInfo;
    }

    /**
     * @return PhoneExtDTO
     */
    public function getPhone(): PhoneExtDTO
    {
        return $this->phone;
    }

    /**
     * @param PhoneExtDTO $phone
     */
    public function setPhone(PhoneExtDTO $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return bool
     */
    public function getSelfFetchTimeRequired(): bool
    {
        return $this->selfFetchTimeRequired;
    }

    /**
     * @param bool $selfFetchTimeRequired
     */
    public function setSelfFetchTimeRequired(bool $selfFetchTimeRequired): void
    {
        $this->selfFetchTimeRequired = $selfFetchTimeRequired;
    }

    /**
     * @return string
     */
    public function getDistance(): string
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     */
    public function setDistance(string $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return bool
     */
    public function getSuperStore(): bool
    {
        return $this->superStore;
    }

    /**
     * @param bool $superStore
     */
    public function setSuperStore(bool $superStore): void
    {
        $this->superStore = $superStore;
    }

    /**
     * @return int
     */
    public function getOrderSoldStatus(): int
    {
        return $this->orderSoldStatus;
    }

    /**
     * @param int $orderSoldStatus
     */
    public function setOrderSoldStatus(int $orderSoldStatus): void
    {
        $this->orderSoldStatus = $orderSoldStatus;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt(int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }

    /**
     * @param int $updatedAt
     */
    public function setUpdatedAt(int $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return bool
     */
    public function getRecentlyUsed(): bool
    {
        return $this->recentlyUsed;
    }

    /**
     * @param bool $recentlyUsed
     */
    public function setRecentlyUsed(bool $recentlyUsed): void
    {
        $this->recentlyUsed = $recentlyUsed;
    }

    /**
     * @return bool
     */
    public function getIsStore(): bool
    {
        return $this->isStore;
    }

    /**
     * @param bool $isStore
     */
    public function setIsStore(bool $isStore): void
    {
        $this->isStore = $isStore;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): bool
    {
        return $this->isOnline;
    }

    /**
     * @param bool $isOnline
     */
    public function setIsOnline(bool $isOnline): void
    {
        $this->isOnline = $isOnline;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}