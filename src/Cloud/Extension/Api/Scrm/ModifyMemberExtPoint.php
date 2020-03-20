<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ModifyMemberRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ModifyMemberResponseOutParam;

interface ModifyMemberExtPoint {

    public function execute(ModifyMemberRequestDTO $) : ModifyMemberResponseOutParam;

}