<?php

namespace Com\Youzan\Cloud\Extension\Param\Shop;

use Com\Youzan\Cloud\Extension\Param\Vo\AddressVO;

/**
 * 响应参数
 * @author Baymax
 * @create Thu May 18 19:52:51 CST 2023
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
     * 指定跳转url，routeType值返回为6时生效，url必须为有赞域名 *.youzan.com，非有赞域名会跳转失败，变为空白页
     * @var string
     */
    private $linkUrl;



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

    /**
     * @return string
     */
    public function getLinkUrl(): ?string
    {
        return $this->linkUrl;
    }

    /**
     * @param string $linkUrl
     */
    public function setLinkUrl(?string $linkUrl): void
    {
        $this->linkUrl = $linkUrl;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}