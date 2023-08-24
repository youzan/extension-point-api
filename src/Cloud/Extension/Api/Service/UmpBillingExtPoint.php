<?php

namespace Com\Youzan\Cloud\Extension\Api\Service;

use Com\Youzan\Cloud\Extension\Param\Model\UmpCalculateRequest;
use Com\Youzan\Cloud\Extension\Param\Model\UmpCalculateResponseOutParam;

interface UmpBillingExtPoint {

    public function billingCalculate(UmpCalculateRequest $umpCalculateRequest) : UmpCalculateResponseOutParam;

    public function calculate(UmpCalculateRequest $umpCalculateRequest) : UmpCalculateResponseOutParam;

}