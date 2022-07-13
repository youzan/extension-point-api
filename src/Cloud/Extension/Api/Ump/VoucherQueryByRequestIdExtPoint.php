<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherQueryByRequestIdExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherQueryByRequestIdExtPointResponseOutParam;

interface VoucherQueryByRequestIdExtPoint {

    public function queryByRequestId(VoucherQueryByRequestIdExtPointRequest $request) : VoucherQueryByRequestIdExtPointResponseOutParam;

}