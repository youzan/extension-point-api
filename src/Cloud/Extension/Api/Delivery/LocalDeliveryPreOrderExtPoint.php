<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryFeeResponseDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryPreOrderResponseDTOOutParam;

interface LocalDeliveryPreOrderExtPoint {

    public function handle(LocalDeliveryFeeResponseDTO $localDeliveryFeeDTO) : LocalDeliveryPreOrderResponseDTOOutParam;

}