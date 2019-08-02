<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\PurchaseReturnOrderSyncRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\PurchaseReturnOrderSyncResponseDTOOutParam;

interface PurchaseReturnOrderSyncExtPoint {

    public function sync(PurchaseReturnOrderSyncRequestDTO $request) : PurchaseReturnOrderSyncResponseDTOOutParam;

}