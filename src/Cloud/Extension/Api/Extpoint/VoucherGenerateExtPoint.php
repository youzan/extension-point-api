<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherGenerateExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherGenerateExtPointResponseOutParam;

interface VoucherGenerateExtPoint {

    public function generateVoucher(VoucherGenerateExtPointRequest $request) : VoucherGenerateExtPointResponseOutParam;

}