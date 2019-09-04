<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CalculatedCouponExtDTO;

/**
 * 返回参数
 * @author Baymax
 * @create 2018-09-29 10:43:38.0
 */
class CalculatedCouponsResultExtDTO implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $calculatedCouponExtDTOS;



    /**
     * @return array
     */
    public function getCalculatedCouponExtDTOS(): array
    {
        return $this->calculatedCouponExtDTOS;
    }

    /**
     * @param array $calculatedCouponExtDTOS
     */
    public function setCalculatedCouponExtDTOS(array $calculatedCouponExtDTOS): void
    {
        $this->calculatedCouponExtDTOS = $calculatedCouponExtDTOS;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}