<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Dto\QueryPrinterStateCoBuildRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\QueryPrinterStateCoBuildResponseDTOOutParam;

interface QueryPrinterState {

    public function queryPrinterState(QueryPrinterStateCoBuildRequestDTO $request) : QueryPrinterStateCoBuildResponseDTOOutParam;

}