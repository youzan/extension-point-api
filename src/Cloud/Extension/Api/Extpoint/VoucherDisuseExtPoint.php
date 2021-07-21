<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherDisuseExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherDisuseExtPointResponseOutParam;

interface VoucherDisuseExtPoint {

    public function disuse(VoucherDisuseExtPointRequest $request) : VoucherDisuseExtPointResponseOutParam;

}