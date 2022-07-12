<?php

namespace Com\Youzan\Cloud\Extension\Api\Cardvoucher;

use Com\Youzan\Cloud\Extension\Param\Request\CustomerExtSingleAdjustmentRequest;
use Com\Youzan\Cloud\Extension\Param\Response\CustomerSummaryCardExtAdjustmentSingleResponseOutParam;

interface SingleAdjustment {

    public function singleAdjustment(CustomerExtSingleAdjustmentRequest $request) : CustomerSummaryCardExtAdjustmentSingleResponseOutParam;

}