<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRefundQueryRequest;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRefundResponseOutParam;

interface ValueCardRefundQueryExtPoint {

    public function handle(ValueCardExtRefundQueryRequest $request) : ValueCardExtRefundResponseOutParam;

}