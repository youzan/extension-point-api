<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Dto\TransformChildRequset;
use Com\Youzan\Cloud\Extension\Param\Dto\TransformChildResponseOutParam;

interface DoCheck {

    public function doCheck(TransformChildRequset $transformChildRequset) : TransformChildResponseOutParam;

}