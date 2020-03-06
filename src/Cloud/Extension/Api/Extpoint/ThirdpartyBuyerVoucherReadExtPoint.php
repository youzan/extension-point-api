<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyBuyerVoucherPQExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyBuyerVoucherPQExtPointResponseOutParam;

interface ThirdpartyBuyerVoucherReadExtPoint {

    public function list(ThirdpartyBuyerVoucherPQExtPointRequest $) : ThirdpartyBuyerVoucherPQExtPointResponseOutParam;

}