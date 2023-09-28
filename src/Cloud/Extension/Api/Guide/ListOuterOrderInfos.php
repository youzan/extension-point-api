<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Request\ExtOrderRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ExtOrderResponseOutParam;

interface ListOuterOrderInfos {

    public function listOuterOrderInfos(ExtOrderRequest $request) : ExtOrderResponseOutParam;

}