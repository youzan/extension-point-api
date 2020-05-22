<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\ValueCardBuyCenterRequest;
use Com\Youzan\Cloud\Extension\Param\Response\ValueCardBuyCenterResponseOutParam;

interface ValueCardBuyCenterExtPoint {

    public function pageBuyCenter(ValueCardBuyCenterRequest $request) : ValueCardBuyCenterResponseOutParam;

}