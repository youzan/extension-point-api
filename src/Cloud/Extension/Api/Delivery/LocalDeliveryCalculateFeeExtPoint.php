<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryOrderDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryFeeResponseDTOOutParam;

interface LocalDeliveryCalculateFeeExtPoint {

    public function handle(LocalDeliveryOrderDTO $localDeliveryOrderDTO) : LocalDeliveryFeeResponseDTOOutParam;

}