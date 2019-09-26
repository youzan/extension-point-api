<?php

namespace Com\Youzan\Cloud\Extension\Api\Im;

use Com\Youzan\Cloud\Extension\Param\Im\RobotMsgReq;
use Com\Youzan\Cloud\Extension\Param\Im\RobotMsgRespOutParam;

interface SendMessageServiceExtPoint {

    public function sendMsg(RobotMsgReq $robotMsgEntity) : RobotMsgRespOutParam;

}