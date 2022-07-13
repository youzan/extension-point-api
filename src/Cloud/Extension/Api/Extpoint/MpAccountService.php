<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExtGetMpAccountInfoDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtMpAccountInfoDTOOutParam;

interface MpAccountService {

    public function getMpAccountInfo(ExtGetMpAccountInfoDTO $dto) : ExtMpAccountInfoDTOOutParam;

}