<?php

namespace Com\Youzan\Cloud\Extension\Api\Service;

use Com\Youzan\Cloud\Extension\Param\Model\UmpCalculateRequest;
use Com\Youzan\Cloud\Extension\Param\Model\UmpCalculateResponseOutParam;

interface UmpBillingExtPoint {

    public function calculate(UmpCalculateRequest $request) : UmpCalculateResponseOutParam;

}