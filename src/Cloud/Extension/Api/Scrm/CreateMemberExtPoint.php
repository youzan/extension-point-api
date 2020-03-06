<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\CreateMemberRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\CreateMemberResponseOutParam;

interface CreateMemberExtPoint {

    public function execute(CreateMemberRequestDTO $request) : CreateMemberResponseOutParam;

}