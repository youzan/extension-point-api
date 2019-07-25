<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\ExampleTestRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\ExampleTestResponseDTOOutParam;

interface ExampleTest {

    public function test(ExampleTestRequestDTO $exampleTestRequestDTO) : ExampleTestResponseDTOOutParam;

}