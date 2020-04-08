<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardActivateRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardActivateResponseOutParam;

interface ValueCardActivateExtPoint {

    public function activate(ValueCardActivateRequest $request) : ValueCardActivateResponseOutParam;

}