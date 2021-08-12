<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherRecycleExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherRecycleExtPointResponseOutParam;

interface VoucherRecycleExtPoint {

    public function recycle(VoucherRecycleExtPointRequest $request) : VoucherRecycleExtPointResponseOutParam;

}