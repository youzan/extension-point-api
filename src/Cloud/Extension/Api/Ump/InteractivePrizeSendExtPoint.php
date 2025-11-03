<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Param\InteractiveSendPrizeParam;
use Com\Youzan\Cloud\Extension\Param\Dto\InteractiveSendPrizeDTOOutParam;

interface InteractivePrizeSendExtPoint {

    public function send(InteractiveSendPrizeParam $param) : InteractiveSendPrizeDTOOutParam;

}