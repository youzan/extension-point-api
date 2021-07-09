<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExtRecalculateLevelRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtRecalculateLevelDTOOutParam;

interface RecalculateLevelExtPoint {

    public function invoke(ExtRecalculateLevelRequestDTO $request) : ExtRecalculateLevelDTOOutParam;

}