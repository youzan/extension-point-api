<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Sun Oct 07 16:20:47 CST 2018
 */
class CouponTakeBackRequestExtDTO implements \JsonSerializable {

    /**
     * 券组id
     * @var int
     */
    private $couponGroupId;

    /**
     * 优惠券id
     * @var int
     */
    private $couponId;

    /**
     * 卡券收回请求
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;



    /**
     * @return int
     */
    public function getCouponGroupId(): ?int
    {
        return $this->couponGroupId;
    }

    /**
     * @param int $couponGroupId
     */
    public function setCouponGroupId(?int $couponGroupId): void
    {
        $this->couponGroupId = $couponGroupId;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}