<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Dto\CobuildWelcomeMsgReqDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\CobuildWelcomeMsgRespDTOOutParam;

interface GetCustomWelcomeMsgContent {

    public function getCustomWelcomeMsgContent(CobuildWelcomeMsgReqDTO $req) : CobuildWelcomeMsgRespDTOOutParam;

}