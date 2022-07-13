<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Dto\StockDeductCheckRequestExtParam;
use Com\Youzan\Cloud\Extension\Param\Dto\StockDeductCheckExtResponseOutParam;

interface StockDeductExtPoint {

    public function check(StockDeductCheckRequestExtParam $request) : StockDeductCheckExtResponseOutParam;

}