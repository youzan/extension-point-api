<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CalculatedCouponExtDTO;

/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class CouponFreezeResultExtDTO implements \JsonSerializable {

    /**
     * 
     * @var CalculatedCouponExtDTO
     */
    private $couponExtDTO;



    /**
     * @return CalculatedCouponExtDTO
     */
    public function getCouponExtDTO(): ?CalculatedCouponExtDTO
    {
        return $this->couponExtDTO;
    }

    /**
     * @param CalculatedCouponExtDTO $couponExtDTO
     */
    public function setCouponExtDTO(?CalculatedCouponExtDTO $couponExtDTO): void
    {
        $this->couponExtDTO = $couponExtDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}