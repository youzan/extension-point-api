<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Param\InteractiveSendPrizeCheckParam;
use Com\Youzan\Cloud\Extension\Param\Dto\InteractiveSendPrizeCheckDTOOutParam;

interface InteractiveSendPrizeCheckExtPoint {

    public function check(InteractiveSendPrizeCheckParam $param) : InteractiveSendPrizeCheckDTOOutParam;

}