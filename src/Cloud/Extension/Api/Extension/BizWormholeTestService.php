<?php

namespace Com\Youzan\Cloud\Extension\Api\Extension;

use Com\Youzan\Cloud\Extension\Param\Model\BizTestRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Model\BizTestResponseDTOOutParam;

interface BizWormholeTestService {

    public function invoke(BizTestRequestDTO $requestDTO) : BizTestResponseDTOOutParam;

}