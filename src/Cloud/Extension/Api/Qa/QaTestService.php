<?php

namespace Com\Youzan\Cloud\Extension\Api\Qa;

use Com\Youzan\Cloud\Extension\Param\Test\BizTestData;
use Com\Youzan\Cloud\Extension\Param\Test\BizTestDataOutParam;

interface QaTestService {

    public function invoke(BizTestData $request) : BizTestDataOutParam;

}