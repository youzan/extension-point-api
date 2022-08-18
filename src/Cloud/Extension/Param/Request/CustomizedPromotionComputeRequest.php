<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Param\PreComputingItemPromotionParam;
use Com\Youzan\Cloud\Extension\Param\Param\ExtActivityParam;
use Com\Youzan\Cloud\Extension\Param\Param\UserParam;
use Com\Youzan\Cloud\Extension\Param\Param\ShopParam;
use Com\Youzan\Cloud\Extension\Param\Param\OrderParam;
use StdClass;

/**
 *  
 * @author Baymax
 * @create Thu Mar 10 20:03:22 CST 2022
 */
class CustomizedPromotionComputeRequest implements \JsonSerializable {

    /**
     * 商品条目前置优惠计算结果列表
     * @var array
     */
    private $computingItemPromotionParamList;

    /**
     *  
     * @var ExtActivityParam
     */
    private $activityParam;

    /**
     * 用户信息
     * @var UserParam
     */
    private $userParam;

    /**
     * 店铺信息
     * @var ShopParam
     */
    private $shopParam;

    /**
     * 订单信息
     * @var OrderParam
     */
    private $orderParam;

    /**
     * 扩展点业务路由key，配置在bos规则中的业务参数，配置方式联系中台营销业务方
     * @var string
     */
    private $bizRouteKey;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 插件类型，第二件半价（115）、限时折扣（11）、满减送（101）等
     * @var string
     */
    private $activityType;



    /**
     * @return array
     */
    public function getComputingItemPromotionParamList(): ?array
    {
        return $this->computingItemPromotionParamList;
    }

    /**
     * @param array $computingItemPromotionParamList
     */
    public function setComputingItemPromotionParamList(?array $computingItemPromotionParamList): void
    {
        $this->computingItemPromotionParamList = $computingItemPromotionParamList;
    }

    /**
     * @return ExtActivityParam
     */
    public function getActivityParam(): ?ExtActivityParam
    {
        return $this->activityParam;
    }

    /**
     * @param ExtActivityParam $activityParam
     */
    public function setActivityParam(?ExtActivityParam $activityParam): void
    {
        $this->activityParam = $activityParam;
    }

    /**
     * @return UserParam
     */
    public function getUserParam(): ?UserParam
    {
        return $this->userParam;
    }

    /**
     * @param UserParam $userParam
     */
    public function setUserParam(?UserParam $userParam): void
    {
        $this->userParam = $userParam;
    }

    /**
     * @return ShopParam
     */
    public function getShopParam(): ?ShopParam
    {
        return $this->shopParam;
    }

    /**
     * @param ShopParam $shopParam
     */
    public function setShopParam(?ShopParam $shopParam): void
    {
        $this->shopParam = $shopParam;
    }

    /**
     * @return OrderParam
     */
    public function getOrderParam(): ?OrderParam
    {
        return $this->orderParam;
    }

    /**
     * @param OrderParam $orderParam
     */
    public function setOrderParam(?OrderParam $orderParam): void
    {
        $this->orderParam = $orderParam;
    }

    /**
     * @return string
     */
    public function getBizRouteKey(): ?string
    {
        return $this->bizRouteKey;
    }

    /**
     * @param string $bizRouteKey
     */
    public function setBizRouteKey(?string $bizRouteKey): void
    {
        $this->bizRouteKey = $bizRouteKey;
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
    public function getActivityType(): ?string
    {
        return $this->activityType;
    }

    /**
     * @param string $activityType
     */
    public function setActivityType(?string $activityType): void
    {
        $this->activityType = $activityType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}