<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\PaginatorParamDTO;
use Com\Youzan\Cloud\Extension\Param\PurchaseOrderResponseDTOOutParam;

interface PurchaseInOrderReverseSyncExtPoint {

    public function readPaginatorData(PaginatorParamDTO $paginatorParamDTO) : PurchaseOrderResponseDTOOutParam;

}