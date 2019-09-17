<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\NoPaginatorParamDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\DeliveryOrderConfirmResponseDTOOutParam;

interface DeliveryOrderConfirmReverseSyncExtPoint {

    public function sync(NoPaginatorParamDTO $request) : DeliveryOrderConfirmResponseDTOOutParam;

}