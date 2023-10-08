<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Param\CheckInValidateJoinParam;
use Com\Youzan\Cloud\Extension\Param\Dto\CheckInValidateJoinDTOOutParam;

interface CheckInValidateJoinBep {

    public function invoke(CheckInValidateJoinParam $param) : CheckInValidateJoinDTOOutParam;

}