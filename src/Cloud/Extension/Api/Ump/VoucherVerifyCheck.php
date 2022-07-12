<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherVerifyCheckExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherVerifyCheckExtPointResponseOutParam;

interface VoucherVerifyCheck {

    public function verifyCheck(VoucherVerifyCheckExtPointRequest $request) : VoucherVerifyCheckExtPointResponseOutParam;

}