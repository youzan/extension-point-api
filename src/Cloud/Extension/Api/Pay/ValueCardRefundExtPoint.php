<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRefundRequest;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRefundResponseOutParam;

interface ValueCardRefundExtPoint {

    public function handle(ValueCardExtRefundRequest $request) : ValueCardExtRefundResponseOutParam;

}