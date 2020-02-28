<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherRefundExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherRefundExtPointResponseOutParam;

interface VoucherRefundExtPoint {

    public function refund(VoucherRefundExtPointRequest $) : VoucherRefundExtPointResponseOutParam;

}