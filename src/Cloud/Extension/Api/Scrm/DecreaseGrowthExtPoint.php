<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Request\ExtGrowthDecreaseDTO;
use Java\Lang\BooleanOutParam;

interface DecreaseGrowthExtPoint {

    public function invoke(ExtGrowthDecreaseDTO $decreaseDTO) : BooleanOutParam;

}