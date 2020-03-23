<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerLevelListQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerLevelListDTOOutParam;

interface GetAvailableCustomerLevelExtPoint {

    public function invoke(ExtCustomerLevelListQueryDTO $request) : ExtCustomerLevelListDTOOutParam;

}