<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardCancelGiveRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardCancelGiveResponseOutParam;

interface ValueCardCancelGiveExtPoint {

    public function cancelGive(ValueCardCancelGiveRequest $request) : ValueCardCancelGiveResponseOutParam;

}