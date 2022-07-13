<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Request\ExPointsRevertDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ResultOutParam;

interface RevertPointsExPoint {

    public function invoke(ExPointsRevertDTO $exPointsRevertDTO) : ResultOutParam;

}