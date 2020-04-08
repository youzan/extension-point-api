<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardTakeRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardTakeResponseOutParam;

interface ValueCardTakeExtPoint {

    public function take(ValueCardTakeRequest $request) : ValueCardTakeResponseOutParam;

}