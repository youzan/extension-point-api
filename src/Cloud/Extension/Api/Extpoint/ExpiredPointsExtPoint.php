<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExtPointsExpiredDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ResultOutParam;

interface ExpiredPointsExtPoint {

    public function invoke(ExtPointsExpiredDTO $expiredDTO) : ResultOutParam;

}