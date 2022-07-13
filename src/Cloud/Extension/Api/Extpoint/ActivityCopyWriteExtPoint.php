<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Voucher\ActivityCopyWriteExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Voucher\ActivityCopyWriteExtPointResponseOutParam;

interface ActivityCopyWriteExtPoint {

    public function customCopywriting(ActivityCopyWriteExtPointRequest $request) : ActivityCopyWriteExtPointResponseOutParam;

}