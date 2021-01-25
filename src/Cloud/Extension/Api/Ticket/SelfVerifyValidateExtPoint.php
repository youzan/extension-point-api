<?php

namespace Com\Youzan\Cloud\Extension\Api\Ticket;

use Com\Youzan\Cloud\Extension\Param\Dto\SelfVerifyValidateRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\SelfVerifyValidatetResponseDTOOutParam;

interface SelfVerifyValidateExtPoint {

    public function validate(SelfVerifyValidateRequestDTO $request) : SelfVerifyValidatetResponseDTOOutParam;

}