<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\FulfillTimeListRequest;
use Com\Youzan\Cloud\Extension\Param\Retail\FulfillTimeListResponseOutParam;

interface FulfillTimeExtpoint {

    public function batchQueryFulfillTime(FulfillTimeListRequest $fulfillTimeListRequest) : FulfillTimeListResponseOutParam;

}