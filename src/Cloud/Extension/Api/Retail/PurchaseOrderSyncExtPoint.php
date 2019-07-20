<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\PurchaseOrderParamDTO;
use Com\Youzan\Cloud\Extension\Param\PurchaseOrderResultDTOOutParam;

interface PurchaseOrderSyncExtPoint {

    public function purchaseOrder(PurchaseOrderParamDTO $purchaseOrderParamDTO) : PurchaseOrderResultDTOOutParam;

}