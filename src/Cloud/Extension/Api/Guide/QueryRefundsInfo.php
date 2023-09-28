<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtRefundOrderRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtRefundOrderResponseOutParam;

interface QueryRefundsInfo {

    public function listRefundsInfo(ExtRefundOrderRequest $request) : ExtRefundOrderResponseOutParam;

}