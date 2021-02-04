<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\AssetsGoodsPromotionExtDTO;

/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class CouponFreezeRequestExtDTO implements \JsonSerializable {

    /**
     * 卡券id
     * @var int
     */
    private $couponId;

    /**
     * 是否可叠加优惠资产
     * @var bool
     */
    private $overlayAssets;

    /**
     * 
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;

    /**
     * 订单邮费
     * @var int
     */
    private $postage;

    /**
     * 订单商品金额
     * @var int
     */
    private $pay;

    /**
     * 渠道类型
     * @var int
     */
    private $channelType;

    /**
     * 
     * @var array
     */
    private $goods;



    /**
     * @return int
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    /**
     * @param int $couponId
     */
    public function setCouponId(?int $couponId): void
    {
        $this->couponId = $couponId;
    }

    /**
     * @return bool
     */
    public function getOverlayAssets(): ?bool
    {
        return $this->overlayAssets;
    }

    /**
     * @param bool $overlayAssets
     */
    public function setOverlayAssets(?bool $overlayAssets): void
    {
        $this->overlayAssets = $overlayAssets;
    }

    /**
     * @return CustomerIdentityDTO
     */
    public function getCustomerIdentityDTO(): ?CustomerIdentityDTO
    {
        return $this->customerIdentityDTO;
    }

    /**
     * @param CustomerIdentityDTO $customerIdentityDTO
     */
    public function setCustomerIdentityDTO(?CustomerIdentityDTO $customerIdentityDTO): void
    {
        $this->customerIdentityDTO = $customerIdentityDTO;
    }

    /**
     * @return int
     */
    public function getPostage(): ?int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(?int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getPay(): ?int
    {
        return $this->pay;
    }

    /**
     * @param int $pay
     */
    public function setPay(?int $pay): void
    {
        $this->pay = $pay;
    }

    /**
     * @return int
     */
    public function getChannelType(): ?int
    {
        return $this->channelType;
    }

    /**
     * @param int $channelType
     */
    public function setChannelType(?int $channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * @return array
     */
    public function getGoods(): ?array
    {
        return $this->goods;
    }

    /**
     * @param array $goods
     */
    public function setGoods(?array $goods): void
    {
        $this->goods = $goods;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}