<?php

namespace Com\Youzan\Cloud\Extension\Api\Store;

use Com\Youzan\Cloud\Extension\Param\Dto\TransformChildRequset;
use Com\Youzan\Cloud\Extension\Param\Dto\TransformChildResponseOutParam;

interface DoCheckNewtwo {

    public function two(TransformChildRequset $transformChildRequset) : TransformChildResponseOutParam;

}