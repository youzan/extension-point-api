<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtCpsCalculateRequest;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtCpsCalculateResponseOutParam;

interface CpsMoneyExtPoint {

    public function invoke(ExtCpsCalculateRequest $request) : ExtCpsCalculateResponseOutParam;

}