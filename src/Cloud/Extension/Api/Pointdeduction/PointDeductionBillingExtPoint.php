<?php

namespace Com\Youzan\Cloud\Extension\Api\Pointdeduction;

use Com\Youzan\Cloud\Extension\Param\Model\PointDeductionPromotionRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Model\PointDeductionPromotionResponseDTOOutParam;

interface PointDeductionBillingExtPoint {

    public function calculate(PointDeductionPromotionRequestDTO $request) : PointDeductionPromotionResponseDTOOutParam;

}