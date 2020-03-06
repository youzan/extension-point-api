<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\AvailableVouchersQueryExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\AvailableVouchersQueryExtPointResponseOutParam;

interface AvailableVouchersQueryExtPoint {

    public function listAvailableVouchers(AvailableVouchersQueryExtPointRequest $) : AvailableVouchersQueryExtPointResponseOutParam;

}