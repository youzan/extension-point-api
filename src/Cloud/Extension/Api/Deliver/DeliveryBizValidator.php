<?php

namespace Com\Youzan\Cloud\Extension\Api\Deliver;

use Com\Youzan\Cloud\Extension\Param\Delivery\DeliveryBizValidatorReqDTO;
use Com\Youzan\Cloud\Extension\Param\Dc\DeliveryParamValidatorResponseOutParam;

interface DeliveryBizValidator {

    public function deliveryOrderSendValidate(DeliveryBizValidatorReqDTO $deliveryBizValidatorReqDTO) : DeliveryParamValidatorResponseOutParam;

}