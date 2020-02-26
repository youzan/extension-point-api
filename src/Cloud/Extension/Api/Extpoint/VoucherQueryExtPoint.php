<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherQueryExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherQueryExtPointResponseOutParam;

interface VoucherQueryExtPoint {

    public function query(VoucherQueryExtPointRequest $) : VoucherQueryExtPointResponseOutParam;

}