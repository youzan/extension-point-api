<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Request\ExtGrowthIncreaseDTO;
use Java\Lang\BooleanOutParam;

interface IncreaseGrowthExtPoint {

    public function invoke(ExtGrowthIncreaseDTO $increaseDTO) : BooleanOutParam;

}