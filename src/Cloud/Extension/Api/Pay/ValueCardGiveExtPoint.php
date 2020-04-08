<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardGiveRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardGiveResponseOutParam;

interface ValueCardGiveExtPoint {

    public function give(ValueCardGiveRequest $request) : ValueCardGiveResponseOutParam;

}