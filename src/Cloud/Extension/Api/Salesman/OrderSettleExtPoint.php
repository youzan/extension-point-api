<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Cps\ExtOrderSettleRequest;
use Com\Youzan\Cloud\Extension\Param\Cps\ExtOrderSettleResponseOutParam;

interface OrderSettleExtPoint {

    public function orderSettle(ExtOrderSettleRequest $request) : ExtOrderSettleResponseOutParam;

}