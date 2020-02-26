<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Activity\ActivityQueryExtPointRequest;
use Com\Youzan\Cloud\Extension\Param\Activity\ActivityQueryExtPointResponseOutParam;

interface ActvityQueryExtPoint {

    public function query(ActivityQueryExtPointRequest $) : ActivityQueryExtPointResponseOutParam;

}