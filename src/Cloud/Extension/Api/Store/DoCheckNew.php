<?php

namespace Com\Youzan\Cloud\Extension\Api\Store;

use Com\Youzan\Cloud\Extension\Param\Dto\TransformChildRequset;
use Com\Youzan\Cloud\Extension\Param\Dto\TransformChildResponseOutParam;

interface DoCheckNew {

    public function doCheckNew(TransformChildRequset $transformChildRequset) : TransformChildResponseOutParam;

}