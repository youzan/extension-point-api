<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryGetDeductFeeDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryGetDeductFeeResponseDTOOutParam;

interface LocalDeliveryGetDeductFeeExtPoint {

    public function handle(LocalDeliveryGetDeductFeeDTO $request) : LocalDeliveryGetDeductFeeResponseDTOOutParam;

}