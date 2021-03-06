<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\GoPayParamDTO;
use Com\Youzan\Cloud\Extension\Param\GoPayResultDTOOutParam;

interface GoPayExtPoint {

    public function goPay(GoPayParamDTO $goPayParamDTO) : GoPayResultDTOOutParam;

}