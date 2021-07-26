<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherDisuseExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherRecycleExtPointResponseOutParam;

interface VoucherRecycleExtPoint {

    public function recycle(VoucherDisuseExtPointRequest $request) : VoucherRecycleExtPointResponseOutParam;

}