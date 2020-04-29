<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryOrderIdDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryLocusDetailDTOOutParam;

interface LocalDeliveryGetDetailExtPoint {

    public function handle(LocalDeliveryOrderIdDTO $request) : LocalDeliveryLocusDetailDTOOutParam;

}