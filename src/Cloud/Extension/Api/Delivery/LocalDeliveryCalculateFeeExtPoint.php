<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryFeeResponseDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryFeeResponseDTOOutParam;

interface LocalDeliveryCalculateFeeExtPoint {

    public function handle(LocalDeliveryFeeResponseDTO $robotMsgEntity) : LocalDeliveryFeeResponseDTOOutParam;

}