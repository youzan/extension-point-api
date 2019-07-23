<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\DeliveryOrderSyncRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\DeliveryOrderSyncResponseDTOOutParam;

interface DeliveryOrderSyncExtPoint {

    public function sync(DeliveryOrderSyncRequestDTO $request) : DeliveryOrderSyncResponseDTOOutParam;

}