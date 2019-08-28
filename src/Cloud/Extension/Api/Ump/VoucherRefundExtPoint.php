<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\VoucherRefundExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Ump\VoucherRefundExtPointResponseOutParam;

interface VoucherRefundExtPoint {

    public function refund(VoucherRefundExtPointRequest $voucherRefundExtPointRequest) : VoucherRefundExtPointResponseOutParam;

}