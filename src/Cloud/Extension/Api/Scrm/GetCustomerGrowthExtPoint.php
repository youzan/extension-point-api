<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCustomerGrowthQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtCustomerGrowthStatusDTOOutParam;

interface GetCustomerGrowthExtPoint {

    public function invoke(ExtCustomerGrowthQueryDTO $queryDTO) : ExtCustomerGrowthStatusDTOOutParam;

}