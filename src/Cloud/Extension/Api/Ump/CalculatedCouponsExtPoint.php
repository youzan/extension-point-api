<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Coupon\CalculatedCouponsRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CalculatedCouponsResultExtDTOOutParam;

interface CalculatedCouponsExtPoint {

    public function find(CalculatedCouponsRequestExtDTO $calculatedCouponsRequestExtDTO) : CalculatedCouponsResultExtDTOOutParam;

}