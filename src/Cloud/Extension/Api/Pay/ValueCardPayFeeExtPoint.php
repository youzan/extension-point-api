<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtPayRequest;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtPayResponseOutParam;

interface ValueCardPayFeeExtPoint {

    public function handle(ValueCardExtPayRequest $request) : ValueCardExtPayResponseOutParam;

}