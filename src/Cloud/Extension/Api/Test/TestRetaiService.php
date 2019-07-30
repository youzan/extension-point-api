<?php

namespace Com\Youzan\Cloud\Extension\Api\Test;

use Com\Youzan\Cloud\Extension\Param\Test\TestRetailInvokeRequestParam;
use Com\Youzan\Cloud\Extension\Param\Test\TestRetailResponseParamOutParam;

interface TestRetaiService {

    public function testInvoke(TestRetailInvokeRequestParam $request) : TestRetailResponseParamOutParam;

}