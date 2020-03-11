<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtPointsConsumeDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ResultOutParam;

interface ConsumePointsExtPoint {

    public function invoke(ExtPointsConsumeDTO $) : ResultOutParam;

}