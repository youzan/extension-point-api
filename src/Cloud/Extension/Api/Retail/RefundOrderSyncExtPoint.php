<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\RefundOrderSyncRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\RefundOrderSyncResponseDTOOutParam;

interface RefundOrderSyncExtPoint {

    public function sync(RefundOrderSyncRequestDTO $request) : RefundOrderSyncResponseDTOOutParam;

}