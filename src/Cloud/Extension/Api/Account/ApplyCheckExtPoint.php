<?php

namespace Com\Youzan\Cloud\Extension\Api\Account;

use Com\Youzan\Cloud\Extension\Param\Account\ExtAccountApplyCheckRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Account\ExtAccountApplyCheckResponseDTOOutParam;

interface ApplyCheckExtPoint {

    public function check(ExtAccountApplyCheckRequestDTO $requestDTO) : ExtAccountApplyCheckResponseDTOOutParam;

}