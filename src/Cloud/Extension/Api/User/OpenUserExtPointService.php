<?php

namespace Com\Youzan\Cloud\Extension\Api\User;

use Com\Youzan\Cloud\Extension\Param\Model\OpenUserVerifyExtPointRequest;
use Java\Lang\BooleanOutParam;

interface OpenUserExtPointService {

    public function verifyOpenUserIdentity(OpenUserVerifyExtPointRequest $param) : BooleanOutParam;

}