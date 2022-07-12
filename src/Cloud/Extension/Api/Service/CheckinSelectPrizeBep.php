<?php

namespace Com\Youzan\Cloud\Extension\Api\Service;

use Com\Youzan\Cloud\Extension\Param\Param\CheckinSelectPrizeParam;
use Com\Youzan\Cloud\Extension\Param\Dto\CheckinSelectPrizeDTOOutParam;

interface CheckinSelectPrizeBep {

    public function invoke(CheckinSelectPrizeParam $param) : CheckinSelectPrizeDTOOutParam;

}