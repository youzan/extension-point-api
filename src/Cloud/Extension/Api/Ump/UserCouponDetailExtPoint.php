<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponDetailRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponDetailResultExtDTOOutParam;

interface UserCouponDetailExtPoint {

    public function get(CouponDetailRequestExtDTO $couponDetailRequestExtDTO) : CouponDetailResultExtDTOOutParam;

}