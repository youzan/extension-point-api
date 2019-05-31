<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 请求参数
 * @author Baymax
 * @create 2018-09-28 19:44:50.0
 */
class CouponGroupDetailRequestExtDTO implements \JsonSerializable {

    /**
     * 券组id
     * @var int
     */
    private $couponGroupId;



    /**
     * @return int
     */
    public function getCouponGroupId(): int
    {
        return $this->couponGroupId;
    }

    /**
     * @param int $couponGroupId
     */
    public function setCouponGroupId(int $couponGroupId): void
    {
        $this->couponGroupId = $couponGroupId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}