<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Extpoint\ExtPointActivityBaseInfo;
use Com\Youzan\Cloud\Extension\Param\Extpoint\ExtPointGoodsBaseInfo;
use Com\Youzan\Cloud\Extension\Param\Common\Buyer;
use Com\Youzan\Cloud\Extension\Param\Common\Shop;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class ExtPointRequestData implements \JsonSerializable {

    /**
     * 活动信息
     * @var ExtPointActivityBaseInfo
     */
    private $activityInfo;

    /**
     * 活动商品信息列表
     * @var array
     */
    private $goodsInfoList;

    /**
     * 下单用户信息
     * @var Buyer
     */
    private $buyerInfo;

    /**
     * 店铺信息
     * @var Shop
     */
    private $shopInfo;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 规则业务路由，由开发者定义
     * @var string
     */
    private $bizRouteKey;

    /**
     * 扩展信息，例如下单时透传给开发者的活动扩展信息
     * @var stdClass
     */
    private $extraInfo;



    /**
     * @return ExtPointActivityBaseInfo
     */
    public function getActivityInfo(): ?ExtPointActivityBaseInfo
    {
        return $this->activityInfo;
    }

    /**
     * @param ExtPointActivityBaseInfo $activityInfo
     */
    public function setActivityInfo(?ExtPointActivityBaseInfo $activityInfo): void
    {
        $this->activityInfo = $activityInfo;
    }

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
     * @return Buyer
     */
    public function getBuyerInfo(): ?Buyer
    {
        return $this->buyerInfo;
    }

    /**
     * @param Buyer $buyerInfo
     */
    public function setBuyerInfo(?Buyer $buyerInfo): void
    {
        $this->buyerInfo = $buyerInfo;
    }

    /**
     * @return Shop
     */
    public function getShopInfo(): ?Shop
    {
        return $this->shopInfo;
    }

    /**
     * @param Shop $shopInfo
     */
    public function setShopInfo(?Shop $shopInfo): void
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}