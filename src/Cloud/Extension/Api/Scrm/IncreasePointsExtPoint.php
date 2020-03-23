<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtPointsIncreaseDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ResultOutParam;

interface IncreasePointsExtPoint {

    public function invoke(ExtPointsIncreaseDTO $request) : ResultOutParam;

}