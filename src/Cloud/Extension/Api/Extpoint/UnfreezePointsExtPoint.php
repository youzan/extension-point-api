<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtPointsUnfreezeDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ResultOutParam;

interface UnfreezePointsExtPoint {

    public function invoke(ExtPointsUnfreezeDTO $extPointsUnfreezeDTO) : ResultOutParam;

}