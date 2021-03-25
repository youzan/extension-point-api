<?php

namespace Com\Youzan\Cloud\Extension\Api\Service;

use Com\Youzan\Cloud\Extension\Param\Param\ImktValidateBepParam;
use Com\Youzan\Cloud\Extension\Param\Dto\ImktValidateResultOutParam;

interface ImktValidateBep {

    public function invoke(ImktValidateBepParam $request) : ImktValidateResultOutParam;

}