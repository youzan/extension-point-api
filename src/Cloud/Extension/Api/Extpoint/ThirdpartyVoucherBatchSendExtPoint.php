<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyVoucherBatchSendExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyVoucherBatchSendExtPointResponseOutParam;

interface ThirdpartyVoucherBatchSendExtPoint {

    public function batchSend(ThirdpartyVoucherBatchSendExtPointRequest $request) : ThirdpartyVoucherBatchSendExtPointResponseOutParam;

}