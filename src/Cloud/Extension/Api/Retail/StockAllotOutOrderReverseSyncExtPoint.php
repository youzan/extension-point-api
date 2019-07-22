<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\PaginatorParamDTO;
use Com\Youzan\Cloud\Extension\Param\StockAllotOutOrderResultDTOOutParam;

interface StockAllotOutOrderReverseSyncExtPoint {

    public function distributionOutOrder(PaginatorParamDTO $paramDTO) : StockAllotOutOrderResultDTOOutParam;

}