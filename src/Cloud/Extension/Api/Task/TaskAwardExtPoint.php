<?php

namespace Com\Youzan\Cloud\Extension\Api\Task;

use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardSendRulesRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardSendRulesResponseDTOOutParam;

interface TaskAwardExtPoint {

    public function getTaskAwardSendRules(ExtTaskAwardSendRulesRequestDTO $request) : ExtTaskAwardSendRulesResponseDTOOutParam;

}