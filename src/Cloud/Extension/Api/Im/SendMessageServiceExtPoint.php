<?php

namespace Com\Youzan\Cloud\Extension\Api\Im;

use Com\Youzan\Cloud\Extension\Param\Im\RobotMsgRequest;
use Com\Youzan\Cloud\Extension\Param\Im\RobotMsgResponseOutParam;

interface SendMessageServiceExtPoint {

    public function sendMsg(RobotMsgRequest $request) : RobotMsgResponseOutParam;

}