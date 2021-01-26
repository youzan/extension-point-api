<?php

namespace Com\Youzan\Cloud\Extension\Param\Shop;

use Com\Youzan\Cloud\Extension\Param\Vo\AddressVO;

/**
 * 
 * @author Baymax
 * @create 2020-08-10 16:52:53.0
 */
class ShopRouteResult implements \JsonSerializable {

    /**
     * 路由方式：1、路由到某店铺，2、路由到定位页, 3、路由到网店列表页
     * @var int
     */
    private $routeType;

    /**
     * 路由到店铺则返回进店店铺kdtId(当routeType&#x3D;2和3不返回)
     * @var int
     */
    private $routeKdtId;

    /**
     * 店铺地址(当routeType&#x3D;2和3不返回)
     * @var AddressVO
     */
    private $addressVO;



    /**
     * @return int
     */
    public function getRouteType(): ?int
    {
        return $this->routeType;
    }

    /**
     * @param int $routeType
     */
    public function setRouteType(?int $routeType): void
    {
        $this->routeType = $routeType;
    }

    /**
     * @return int
     */
    public function getRouteKdtId(): ?int
    {
        return $this->routeKdtId;
    }

    /**
     * @param int $routeKdtId
     */
    public function setRouteKdtId(?int $routeKdtId): void
    {
        $this->routeKdtId = $routeKdtId;
    }

    /**
     * @return AddressVO
     */
    public function getAddressVO(): ?AddressVO
    {
        return $this->addressVO;
    }

    /**
     * @param AddressVO $addressVO
     */
    public function setAddressVO(?AddressVO $addressVO): void
    {
        $this->addressVO = $addressVO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}