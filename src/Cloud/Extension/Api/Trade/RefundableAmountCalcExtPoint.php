<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\RefundableAmountCalcRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Trade\RefundableAmountCalcResponseDTOOutParam;

interface RefundableAmountCalcExtPoint {

    public function calculate(RefundableAmountCalcRequestDTO $request) : RefundableAmountCalcResponseDTOOutParam;

}