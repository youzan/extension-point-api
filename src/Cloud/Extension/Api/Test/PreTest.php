<?php

namespace Com\Youzan\Cloud\Extension\Api\Test;

use Com\Youzan\Cloud\Extension\Param\Test\PreTestRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Test\ResultOutParam;

interface PreTest {

    public function preInvoke(PreTestRequestDTO $requestDTO) : ResultOutParam;

}