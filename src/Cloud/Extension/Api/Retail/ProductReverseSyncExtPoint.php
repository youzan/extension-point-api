<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\PaginatorParamDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\ProductSyncResponseDTOOutParam;

interface ProductReverseSyncExtPoint {

    public function sync(PaginatorParamDTO $request) : ProductSyncResponseDTOOutParam;

}