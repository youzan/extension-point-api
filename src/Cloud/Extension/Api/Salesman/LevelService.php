<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtLevelRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\AllLevelRulesResponseDTOOutParam;

interface LevelService {

    public function getCustomLevelRules(ExtLevelRequestDTO $extLevelRequest) : AllLevelRulesResponseDTOOutParam;

}