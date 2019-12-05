<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeQueryRequest;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeResponseOutParam;

interface ValueCardRechargeQueryExtPoint {

    public function handle(ValueCardExtRechargeQueryRequest $request) : ValueCardExtRechargeResponseOutParam;

}