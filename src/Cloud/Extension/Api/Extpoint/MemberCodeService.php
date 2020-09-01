<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExtGenMemberCodeDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtMemberCodeDTOOutParam;

interface MemberCodeService {

    public function invoke(ExtGenMemberCodeDTO $request) : ExtMemberCodeDTOOutParam;

}