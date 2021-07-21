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
    private $currentKdtId;

    /**
     * 总店店铺ID
     * @var int
     */
    private $rootKdtId;

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
     * @return int
     */
    public function getCurrentKdtId(): ?int
    {
        return $this->currentKdtId;
    }

    /**
     * @param int $currentKdtId
     */
    public function setCurrentKdtId(?int $currentKdtId): void
    {
        $this->currentKdtId = $currentKdtId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}