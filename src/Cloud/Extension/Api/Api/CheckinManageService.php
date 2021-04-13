<?php

namespace Com\Youzan\Cloud\Extension\Api\Api;

use Com\Youzan\Cloud\Extension\Param\Model\CheckinActivityParam;
use Com\Youzan\Cloud\Extension\Param\Model\CheckinEditResultDTOOutParam;

interface CheckinManageService {

    public function create(CheckinActivityParam $request) : CheckinEditResultDTOOutParam;

}