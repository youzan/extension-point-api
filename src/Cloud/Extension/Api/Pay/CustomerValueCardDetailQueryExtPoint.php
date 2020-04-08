<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\CustomerExtValueCardDetailQueryRequest;
use Com\Youzan\Cloud\Extension\Param\Response\CustomerExtValueCardDetailQueryResponseOutParam;

interface CustomerValueCardDetailQueryExtPoint {

    public function queryCustomerValueCardDetail(CustomerExtValueCardDetailQueryRequest $request) : CustomerExtValueCardDetailQueryResponseOutParam;

}