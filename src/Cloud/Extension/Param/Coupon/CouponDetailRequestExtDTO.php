<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 请求参数
 * @author Baymax
 * @create 2018-09-28 19:32:07.0
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