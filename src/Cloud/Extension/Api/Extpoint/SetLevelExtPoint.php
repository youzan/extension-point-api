<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExtSetLevelRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtSetLevelDTOOutParam;

interface SetLevelExtPoint {

    public function invoke(ExtSetLevelRequestDTO $extSetLevelRequestDTO) : ExtSetLevelDTOOutParam;

}