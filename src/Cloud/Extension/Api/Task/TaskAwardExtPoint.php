<?php

namespace Com\Youzan\Cloud\Extension\Api\Task;

use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardSendRulesRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardSendRulesResponseDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardRuleDescRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Task\ExtTaskAwardRulesDescResponseDTOOutParam;

interface TaskAwardExtPoint {

    public function getTaskAwardSendRules(ExtTaskAwardSendRulesRequestDTO $request) : ExtTaskAwardSendRulesResponseDTOOutParam;

    public function getTaskAwardRulesDesc(ExtTaskAwardRuleDescRequestDTO $request) : ExtTaskAwardRulesDescResponseDTOOutParam;

}