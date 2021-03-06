<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\RefundableAmoutCalcParamDTO;
use Com\Youzan\Cloud\Extension\Param\RefundableAmoutCalcResultDTOOutParam;

interface RefundableAmoutCalcExtPoint {

    public function calc(RefundableAmoutCalcParamDTO $refundableAmoutCalcParamDTO) : RefundableAmoutCalcResultDTOOutParam;

}