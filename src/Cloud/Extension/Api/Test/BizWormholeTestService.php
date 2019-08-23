<?php

namespace Com\Youzan\Cloud\Extension\Api\Test;

use Com\Youzan\Cloud\Extension\Param\Test\BizTestRequest;
use Com\Youzan\Cloud\Extension\Param\Test\BizTestResponseOutParam;

interface BizWormholeTestService {

    public function invoke(BizTestRequest $request) : BizTestResponseOutParam;

}