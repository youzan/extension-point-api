<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\PaginatorParamDTO;
use Com\Youzan\Cloud\Extension\Param\StockAllotOutOrderResultDTOOutParam;

interface StockAllotOutOrderReverseSyncExtPoint {

    public function readPaginatorData(PaginatorParamDTO $paramDTO) : StockAllotOutOrderResultDTOOutParam;

}