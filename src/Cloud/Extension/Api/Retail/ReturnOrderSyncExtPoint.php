<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\ReturnOrderSyncRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\ReturnOrderSyncResponseDTOOutParam;

interface ReturnOrderSyncExtPoint {

    public function sync(ReturnOrderSyncRequestDTO $request) : ReturnOrderSyncResponseDTOOutParam;

}