<?php

namespace Com\Youzan\Cloud\Extension\Api\Test;

use Com\Youzan\Cloud\Extension\Param\Clbsdemo\BizTestRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Test\ResultOutParam;

interface PreTest {

    public function preInvoke(BizTestRequestDTO $requestDTO) : ResultOutParam;

}