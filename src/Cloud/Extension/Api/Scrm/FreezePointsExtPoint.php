<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtPointsFreezeDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\FreezePointsResponseOutParam;

interface FreezePointsExtPoint {

    public function invoke(ExtPointsFreezeDTO $) : FreezePointsResponseOutParam;

}