<?php

namespace Com\Youzan\Cloud\Extension\Api\Test;

use Com\Youzan\Cloud\Extension\Param\Test\TestOneReq;
use Com\Youzan\Cloud\Extension\Param\Test\TestOneResOutParam;

interface TestOne {

    public function testOne(TestOneReq $bizTestRequestDTO) : TestOneResOutParam;

}