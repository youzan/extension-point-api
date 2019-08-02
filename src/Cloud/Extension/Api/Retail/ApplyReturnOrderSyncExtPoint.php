<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\ApplyReturnOrderSyncRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\ApplyReturnOrderSyncResponseOutParam;

interface ApplyReturnOrderSyncExtPoint {

    public function sync(ApplyReturnOrderSyncRequestDTO $request) : ApplyReturnOrderSyncResponseOutParam;

}