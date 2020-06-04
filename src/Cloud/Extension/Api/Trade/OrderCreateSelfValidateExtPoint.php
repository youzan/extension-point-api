<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\OrderCreateSelfValidateParamDTO;
use Com\Youzan\Cloud\Extension\Param\OrderCreateSelfValidateResultDTOOutParam;

interface OrderCreateSelfValidateExtPoint {

    public function validate(OrderCreateSelfValidateParamDTO $request) : OrderCreateSelfValidateResultDTOOutParam;

}