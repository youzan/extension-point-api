<?php

namespace Com\Youzan\Cloud\Extension\Param\Shop;

use Com\Youzan\Cloud\Extension\Param\Vo\AddressVO;

/**
 * 响应参数
 * @author Baymax
 * @create Mon Mar 14 16:49:17 CST 2022
 */
class ShopRouteResult implements \JsonSerializable {

    /**
     * 路由方式：1、路由到某店铺
     * @var int
     */
    private $routeType;

    /**
     * 路由到店铺则返回进店店铺kdtId
     * @var int
     */
    private $routeKdtId;

    /**
     * 店铺地址
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