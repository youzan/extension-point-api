<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyVoucherSendExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\ThirdpartyVoucherSendExtPointResponseOutParam;

interface ThirdpartyVoucherSendExtPoint {

    public function send(ThirdpartyVoucherSendExtPointRequest $request) : ThirdpartyVoucherSendExtPointResponseOutParam;

}