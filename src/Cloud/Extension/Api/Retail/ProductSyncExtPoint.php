<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\ProductSyncRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\ProductSyncResponseDTOOutParam;

interface ProductSyncExtPoint {

    public function sync(ProductSyncRequestDTO $request) : ProductSyncResponseDTOOutParam;

}