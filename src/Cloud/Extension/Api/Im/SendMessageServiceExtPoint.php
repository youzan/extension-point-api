<?php

namespace Com\Youzan\Cloud\Extension\Api\Im;

use Com\Youzan\Cloud\Extension\Param\RobotMsgReq;
use Com\Youzan\Cloud\Extension\Param\RobotMsgRespOutParam;

interface SendMessageServiceExtPoint {

    public function sendMsg(RobotMsgReq $robotMsgEntity) : RobotMsgRespOutParam;

}