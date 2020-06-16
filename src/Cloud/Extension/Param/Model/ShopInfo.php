<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 店铺信息
 * @author Baymax
 * @create Thu Jun 11 11:03:35 CST 2020
 */
class ShopInfo implements \JsonSerializable {

    /**
     * 当前店铺id
     * @var int
     */
    private $shopId;

    /**
     * 总店id
     * @var int
     */
    private $hqShopId;



    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(int $shopId): void
    {
        $this->shopId = $shopId;
    }

    /**
     * @return int
     */
    public function getHqShopId(): int
    {
        return $this->hqShopId;
    }

    /**
     * @param int $hqShopId
     */
    public function setHqShopId(int $hqShopId): void
    {
        $this->hqShopId = $hqShopId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}