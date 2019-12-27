<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtAccountVerifyRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtAccountVerifyResponseDTOOutParam;

interface AccountService {

    public function verify(ExtAccountVerifyRequestDTO $extAccountVerifyRequest) : ExtAccountVerifyResponseDTOOutParam;

}