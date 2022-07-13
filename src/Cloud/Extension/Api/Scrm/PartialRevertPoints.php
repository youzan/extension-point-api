<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Request\ExPointsPartialRevertDTO;
use Java\Lang\BooleanOutParam;

interface PartialRevertPoints {

    public function invoke(ExPointsPartialRevertDTO $revertDTO) : BooleanOutParam;

}