<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtPayQueryRequest;
use Com\Youzan\Cloud\Extension\Param\Pay\ValueCardExtPayResponseOutParam;

interface ValueCardPayQueryExtPoint {

    public function handle(ValueCardExtPayQueryRequest $request) : ValueCardExtPayResponseOutParam;

}