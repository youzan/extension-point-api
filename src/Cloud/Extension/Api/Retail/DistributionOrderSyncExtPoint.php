<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\DistributionOrderSyncRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\DistributionOrderSyncResponseDTOOutParam;

interface DistributionOrderSyncExtPoint {

    public function sync(DistributionOrderSyncRequestDTO $request) : DistributionOrderSyncResponseDTOOutParam;

}