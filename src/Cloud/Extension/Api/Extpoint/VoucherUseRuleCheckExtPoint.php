<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherUseRuleCheckExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\VoucherUseRuleCheckExtPointResponseOutParam;

interface VoucherUseRuleCheckExtPoint {

    public function checkUseRule(VoucherUseRuleCheckExtPointRequest $request) : VoucherUseRuleCheckExtPointResponseOutParam;

}