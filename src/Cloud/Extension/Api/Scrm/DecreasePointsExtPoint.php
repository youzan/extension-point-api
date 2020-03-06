<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtPointsDecreaseDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ResultOutParam;

interface DecreasePointsExtPoint {

    public function invoke(ExtPointsDecreaseDTO $request) : ResultOutParam;

}