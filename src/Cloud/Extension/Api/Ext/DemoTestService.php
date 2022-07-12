<?php

namespace Com\Youzan\Cloud\Extension\Api\Ext;

use Com\Youzan\Cloud\Extension\Param\Ext\RequestDTO;
use Com\Youzan\Cloud\Extension\Param\Ext\RespDTOOutParam;

interface DemoTestService {

    public function helloWorld(RequestDTO $request) : RespDTOOutParam;

    public function hello(RequestDTO $request) : RespDTOOutParam;

}