<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 请求参数
 * @author Baymax
 * @create Fri Sep 28 19:32:07 CST 2018
 */
class CouponDetailRequestExtDTO implements \JsonSerializable {

    /**
     * 券组id
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