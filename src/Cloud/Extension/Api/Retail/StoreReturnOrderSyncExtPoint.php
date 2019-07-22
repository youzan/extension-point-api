<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\StoreReturnOrderParamDTO;
use Com\Youzan\Cloud\Extension\Param\StoreReturnOrderResultDTOOutParam;

interface StoreReturnOrderSyncExtPoint {

    public function storeReturnOrderSync(StoreReturnOrderParamDTO $paramDTO) : StoreReturnOrderResultDTOOutParam;

}