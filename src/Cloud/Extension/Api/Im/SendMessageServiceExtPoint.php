<?php

namespace Com\Youzan\Cloud\Extension\Api\Im;

use Com\Youzan\Cloud\Extension\Param\Im\RobotMsgData;
use Com\Youzan\Cloud\Extension\Param\Im\RobotMsgDataOutParam;

interface SendMessageServiceExtPoint {

    public function sendMsg(RobotMsgData $entity) : RobotMsgDataOutParam;

}