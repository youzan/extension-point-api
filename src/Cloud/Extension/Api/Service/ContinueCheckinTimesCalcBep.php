<?php

namespace Com\Youzan\Cloud\Extension\Api\Service;

use Com\Youzan\Cloud\Extension\Param\Param\ContinueCheckinTimesCalcParam;
use Com\Youzan\Cloud\Extension\Param\Dto\ContinueCheckinTimesDTOOutParam;

interface ContinueCheckinTimesCalcBep {

    public function invoke(ContinueCheckinTimesCalcParam $param) : ContinueCheckinTimesDTOOutParam;

}