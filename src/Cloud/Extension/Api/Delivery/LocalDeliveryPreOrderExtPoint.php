<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryOrderDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryPreOrderResponseDTOOutParam;

interface LocalDeliveryPreOrderExtPoint {

    public function handle(LocalDeliveryOrderDTO $localDeliveryOrderDTO) : LocalDeliveryPreOrderResponseDTOOutParam;

}