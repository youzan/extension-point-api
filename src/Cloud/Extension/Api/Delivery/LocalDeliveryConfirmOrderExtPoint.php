<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryOrderIdDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\BaseResponseDTOOutParam;

interface LocalDeliveryConfirmOrderExtPoint {

    public function handle(LocalDeliveryOrderIdDTO $request) : BaseResponseDTOOutParam;

}