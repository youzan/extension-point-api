<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\GoodsInfo;
use Com\Youzan\Cloud\Extension\Param\Model\UserInfo;
use Com\Youzan\Cloud\Extension\Param\Model\ShopInfo;
use StdClass;

/**
 * 订单基本信息：商品、用户、店铺、订单号
 * @author Baymax
 * @create Wed Aug 09 16:47:40 CST 2023
 */
class BillingBaseInfo implements \JsonSerializable {

    /**
     * 商品基础信息
     * @var array
     */
    private $goodsInfoList;

    /**
     * 用户信息
     * @var UserInfo
     */
    private $userInfo;

    /**
     * 店铺信息
     * @var ShopInfo
     */
    private $shopInfo;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 下单唯一标识
     * @var string
     */
    private $bookKey;



    /**
     * @return array
     */
    public function getGoodsInfoList(): ?array
    {
        return $this->goodsInfoList;
    }

    /**
     * @param array $goodsInfoList
     */
    public function setGoodsInfoList(?array $goodsInfoList): void
    {
        $this->goodsInfoList = $goodsInfoList;
    }

    /**
     * @return UserInfo
     */
    public function getUserInfo(): ?UserInfo
    {
        return $this->userInfo;
    }

    /**
     * @param UserInfo $userInfo
     */
    public function setUserInfo(?UserInfo $userInfo): void
    {
        $this->userInfo = $userInfo;
    }

    /**
     * @return ShopInfo
     */
    public function getShopInfo(): ?ShopInfo
    {
        return $this->shopInfo;
    }

    /**
     * @param ShopInfo $shopInfo
     */
    public function setShopInfo(?ShopInfo $shopInfo): void
    {
        $this->shopInfo = $shopInfo;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return stdClass
     */
    public function getExtraInfo(): ?stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(?stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

    /**
     * @return string
     */
    public function getBookKey(): ?string
    {
        return $this->bookKey;
    }

    /**
     * @param string $bookKey
     */
    public function setBookKey(?string $bookKey): void
    {
        $this->bookKey = $bookKey;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}