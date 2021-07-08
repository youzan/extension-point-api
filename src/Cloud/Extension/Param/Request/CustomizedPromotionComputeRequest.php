<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Param\PreComputingItemPromotionParam;
use Com\Youzan\Cloud\Extension\Param\Param\ExtActivityParam;
use Com\Youzan\Cloud\Extension\Param\Param\UserParam;
use Com\Youzan\Cloud\Extension\Param\Param\ShopParam;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class CustomizedPromotionComputeRequest implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $computingItemPromotionParamList;

    /**
     * 
     * @var ExtActivityParam
     */
    private $activityParam;

    /**
     * 
     * @var UserParam
     */
    private $userParam;

    /**
     * 
     * @var ShopParam
     */
    private $shopParam;

    /**
     * 
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var string
     */
    private $bizRouteKey;

    /**
     * 
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 
     * @var string
     */
    private $appType;

    /**
     * 
     * @var stdClass
     */
    private $extraByAppType;



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
    public function getAppType(): ?string
    {
        return $this->appType;
    }

    /**
     * @param string $appType
     */
    public function setAppType(?string $appType): void
    {
        $this->appType = $appType;
    }

    /**
     * @return stdClass
     */
    public function getExtraByAppType(): ?stdClass
    {
        return $this->extraByAppType;
    }

    /**
     * @param stdClass $extraByAppType
     */
    public function setExtraByAppType(?stdClass $extraByAppType): void
    {
        $this->extraByAppType = $extraByAppType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}