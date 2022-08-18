<?php

namespace Com\Youzan\Cloud\Extension\Api\User;

use Com\Youzan\Cloud\Extension\Param\Model\AccessControlReq;
use Com\Youzan\Cloud\Extension\Param\Model\AccessControlRespOutParam;

interface CloudPlatform {

    public function accessControlExt(AccessControlReq $param) : AccessControlRespOutParam;

}