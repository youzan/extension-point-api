<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\FindCouponGroupRequestExt;
use Com\Youzan\Cloud\Extension\Param\FindCouponGroupResponseExtOutParam;

interface CouponGroupExtension {

    public function find(FindCouponGroupRequestExt $findCouponGroupRequestExt) : FindCouponGroupResponseExtOutParam;

}