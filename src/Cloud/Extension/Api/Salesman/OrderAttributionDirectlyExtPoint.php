<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Cps\ExtOrderAttributionDirectlyRequest;
use Com\Youzan\Cloud\Extension\Param\Cps\ExtOrderAttributionDirectlyResponseOutParam;

interface OrderAttributionDirectlyExtPoint {

    public function orderAttributionDirectly(ExtOrderAttributionDirectlyRequest $request) : ExtOrderAttributionDirectlyResponseOutParam;

}