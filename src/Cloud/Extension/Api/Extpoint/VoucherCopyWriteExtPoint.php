<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherCopyWriteExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherCopyWriteExtPointResponseOutParam;

interface VoucherCopyWriteExtPoint {

    public function customCopywriting(VoucherCopyWriteExtPointRequest $request) : VoucherCopyWriteExtPointResponseOutParam;

}