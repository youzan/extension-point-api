<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerLevelListQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerLevelListDTOOutParam;

interface GetCustomerLevelListExtPoint {

    public function invoke(ExtCustomerLevelListQueryDTO $) : ExtCustomerLevelListDTOOutParam;

}