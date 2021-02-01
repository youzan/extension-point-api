<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponExtDTO;

/**
 * 返回参数
 * @author Baymax
 * @create Fri Sep 28 19:32:07 CST 2018
 */
class CouponDetailResultExtDTO implements \JsonSerializable {

    /**
     * 卡券信息
     * @var CouponExtDTO
     */
    private $couponExtDTO;



    /**
     * @return CouponExtDTO
     */
    public function getCouponExtDTO(): ?CouponExtDTO
    {
        return $this->couponExtDTO;
    }

    /**
     * @param CouponExtDTO $couponExtDTO
     */
    public function setCouponExtDTO(?CouponExtDTO $couponExtDTO): void
    {
        $this->couponExtDTO = $couponExtDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}