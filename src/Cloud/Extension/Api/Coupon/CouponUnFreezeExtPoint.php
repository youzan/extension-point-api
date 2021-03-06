<?php

namespace Com\Youzan\Cloud\Extension\Api\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponUnFreezeRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponUnFreezeResultExtDTOOutParam;

interface CouponUnFreezeExtPoint {

    public function unFreeze(CouponUnFreezeRequestExtDTO $couponUnFreezeRequest) : CouponUnFreezeResultExtDTOOutParam;

}