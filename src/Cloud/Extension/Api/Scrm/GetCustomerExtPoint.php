<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\CustomerIdentifyDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\CustomerProfileDTOOutParam;

interface GetCustomerExtPoint {

    public function execute(CustomerIdentifyDTO $customerIdentifyDTO) : CustomerProfileDTOOutParam;

}