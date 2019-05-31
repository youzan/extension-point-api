<?php

namespace Com\Youzan\Cloud\Extension\Api\Dc;

use Com\Youzan\Cloud\Extension\Param\Dc\DeliveryBizValidatorRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dc\DeliveryParamValidatorResponseOutParam;

interface DeliveryBizValidatorExtPoint {

    public function orderSendValidate(DeliveryBizValidatorRequestDTO $DeliveryBizValidatorRequestDTO) : DeliveryParamValidatorResponseOutParam;

}