<?php

namespace Com\Youzan\Cloud\Extension\Api\Account;

use Com\Youzan\Cloud\Extension\Param\Account\ExtAccountVerifyRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Account\ExtAccountVerifyResponseDTOOutParam;

interface AccountExtPoint {

    public function verify(ExtAccountVerifyRequestDTO $request) : ExtAccountVerifyResponseDTOOutParam;

}