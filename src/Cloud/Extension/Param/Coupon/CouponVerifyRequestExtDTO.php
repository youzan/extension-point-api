<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 
 * @author Baymax
 * @create 2018-09-30 14:43:11.0
 */
class CouponVerifyRequestExtDTO implements \JsonSerializable {

    /**
     * 卡券id
     * @var int
     */
    private $couponId;



    /**
     * @return int
     */
    public function getCouponId(): int
    {
        return $this->couponId;
    }

    /**
     * @param int $couponId
     */
    public function setCouponId(int $couponId): void
    {
        $this->couponId = $couponId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}