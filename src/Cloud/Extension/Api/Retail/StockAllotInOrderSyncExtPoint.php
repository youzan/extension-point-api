<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\StockAllotInOrderParamDTO;
use Com\Youzan\Cloud\Extension\Param\StockAllotInOrderResultDTOOutParam;

interface StockAllotInOrderSyncExtPoint {

    public function stockAllotInOrder(StockAllotInOrderParamDTO $paramDTO) : StockAllotInOrderResultDTOOutParam;

}