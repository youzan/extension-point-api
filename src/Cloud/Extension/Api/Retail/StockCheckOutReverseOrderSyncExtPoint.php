<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\PaginatorParamDTO;
use Com\Youzan\Cloud\Extension\Param\StockCheckOrderResponseDTOOutParam;

interface StockCheckOutReverseOrderSyncExtPoint {

    public function readPaginatorData(PaginatorParamDTO $request) : StockCheckOrderResponseDTOOutParam;

}