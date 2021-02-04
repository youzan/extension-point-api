<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\ActivityInfo;
use Com\Youzan\Cloud\Extension\Param\Model\GoodsInfo;
use Com\Youzan\Cloud\Extension\Param\Model\UserInfo;
use Com\Youzan\Cloud\Extension\Param\Model\ShopInfo;
use StdClass;

/**
 * 基本参数
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class BillingBaseInfo implements \JsonSerializable {

    /**
     * 活动参数
     * @var ActivityInfo
     */
    private $activityInfo;

    /**
     * 商品列表
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
     * 拓展信息
     * @var stdClass
     */
    private $extraInfo;



    /**
     * @return ActivityInfo
     */
    public function getActivityInfo(): ActivityInfo
    {
        return $this->activityInfo;
    }

    /**
     * @param ActivityInfo $activityInfo
     */
    public function setActivityInfo(ActivityInfo $activityInfo): void
    {
        $this->activityInfo = $activityInfo;
    }

    /**
     * @return array
     */
    public function getGoodsInfoList(): array
    {
        return $this->goodsInfoList;
    }

    /**
     * @param array $goodsInfoList
     */
    public function setGoodsInfoList(array $goodsInfoList): void
    {
        $this->goodsInfoList = $goodsInfoList;
    }

    /**
     * @return UserInfo
     */
    public function getUserInfo(): UserInfo
    {
        return $this->userInfo;
    }

    /**
     * @param UserInfo $userInfo
     */
    public function setUserInfo(UserInfo $userInfo): void
    {
        $this->userInfo = $userInfo;
    }

    /**
     * @return ShopInfo
     */
    public function getShopInfo(): ShopInfo
    {
        return $this->shopInfo;
    }

    /**
     * @param ShopInfo $shopInfo
     */
    public function setShopInfo(ShopInfo $shopInfo): void
    {
        $this->shopInfo = $shopInfo;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return stdClass
     */
    public function getExtraInfo(): stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}