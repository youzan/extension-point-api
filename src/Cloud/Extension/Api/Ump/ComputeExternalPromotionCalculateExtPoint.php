<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Request\ExternalPromotionCalculateRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExternalPromotionCalculateResponseOutParam;

interface ComputeExternalPromotionCalculateExtPoint {

    public function calculate(ExternalPromotionCalculateRequest $promotionCalculate) : ExternalPromotionCalculateResponseOutParam;

}