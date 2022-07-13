<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCommissionCalculateRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtCommissionCalculateResponseOutParam;

interface CalculateCommission {

    public function calculateCommission(ExtCommissionCalculateRequest $request) : ExtCommissionCalculateResponseOutParam;

}