<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherVerifyExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherVerifyExtPointResponseOutParam;

interface VoucherVerifyExtPoint {

    public function verify(VoucherVerifyExtPointRequest $request) : VoucherVerifyExtPointResponseOutParam;

}