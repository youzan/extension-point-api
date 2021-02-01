<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 
 * @author Baymax
 * @create Sun Sep 30 15:25:27 CST 2018
 */
class CouponUnFreezeRequestExtDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $couponId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}