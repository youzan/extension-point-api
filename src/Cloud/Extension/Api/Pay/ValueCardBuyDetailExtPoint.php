<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardBuyDetailRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardBuyDetailResponseOutParam;

interface ValueCardBuyDetailExtPoint {

    public function buyDetail(ValueCardBuyDetailRequest $request) : ValueCardBuyDetailResponseOutParam;

}