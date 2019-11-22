<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeRequest;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtRechargeResponseOutParam;

interface ValueCardRechargeExtPoint {

    public function handle(ValueCardExtRechargeRequest $request) : ValueCardExtRechargeResponseOutParam;

}