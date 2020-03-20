<?php

namespace Com\Youzan\Cloud\Extension\Api\Beauty;

use Com\Youzan\Cloud\Extension\Param\Beauty\GroupOpenCheckRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Beauty\GroupOpenCheckResponseDTOOutParam;

interface ActivityGroupOpenCheckExtPoint {

    public function execute(GroupOpenCheckRequestDTO $request) : GroupOpenCheckResponseDTOOutParam;

}