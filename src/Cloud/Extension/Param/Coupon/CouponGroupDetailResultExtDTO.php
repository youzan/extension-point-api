<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupExtDTO;

/**
 * 返回参数
 * @author Baymax
 * @create 2018-09-28 19:44:50.0
 */
class CouponGroupDetailResultExtDTO implements \JsonSerializable {

    /**
     * 券组信息
     * @var CouponGroupExtDTO
     */
    private $couponGroupExtDTO;



    /**
     * @return CouponGroupExtDTO
     */
    public function getCouponGroupExtDTO(): CouponGroupExtDTO
    {
        return $this->couponGroupExtDTO;
    }

    /**
     * @param CouponGroupExtDTO $couponGroupExtDTO
     */
    public function setCouponGroupExtDTO(CouponGroupExtDTO $couponGroupExtDTO): void
    {
        $this->couponGroupExtDTO = $couponGroupExtDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}