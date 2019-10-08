<?php

namespace Com\Youzan\Cloud\Extension\Api\Im;

use Com\Youzan\Cloud\Extension\Param\Im\RobotMsg;
use Com\Youzan\Cloud\Extension\Param\Im\RobotMsgOutParam;

interface SendMessageServiceExtPoint {

    public function sendMsg(RobotMsg $robotMsgEntity) : RobotMsgOutParam;

}