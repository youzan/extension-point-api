<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Cps\ExtAttributionRequest;
use Com\Youzan\Cloud\Extension\Param\Cps\ExtAttributionResponseOutParam;

interface OrderAttributionExtPoint {

    public function orderAttribution(ExtAttributionRequest $request) : ExtAttributionResponseOutParam;

}