<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\Request\RefundAgreeBizValidatorCobuildRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Response\RefundAgreeBizValidatorCobuildResponseDTOOutParam;

interface RefundAgreeBizValidatorExtPoint {

    public function bizValidator(RefundAgreeBizValidatorCobuildRequestDTO $refundBizCheckRequest) : RefundAgreeBizValidatorCobuildResponseDTOOutParam;

}