<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherVerifyCodeGenerateExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherVerifyCodeGenerateExtPointResponseOutParam;

interface VoucherVerifyCodeGenerateExtPoint {

    public function generateVerifyCode(VoucherVerifyCodeGenerateExtPointRequest $request) : VoucherVerifyCodeGenerateExtPointResponseOutParam;

}