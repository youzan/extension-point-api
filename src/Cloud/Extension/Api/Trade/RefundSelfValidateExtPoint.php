<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\RefundSelfValidateParamDTO;
use Com\Youzan\Cloud\Extension\Param\RefundSelfValidateResultDTOOutParam;

interface RefundSelfValidateExtPoint {

    public function validate(RefundSelfValidateParamDTO $refundSelfValidateParamDTO) : RefundSelfValidateResultDTOOutParam;

}