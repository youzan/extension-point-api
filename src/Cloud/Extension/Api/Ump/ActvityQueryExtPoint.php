<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\ActivityQueryExtPointRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Ump\ActivityQueryExtPointResponseDTOOutParam;

interface ActvityQueryExtPoint {

    public function query(ActivityQueryExtPointRequestDTO $activityQueryExtPointRequest) : ActivityQueryExtPointResponseDTOOutParam;

}