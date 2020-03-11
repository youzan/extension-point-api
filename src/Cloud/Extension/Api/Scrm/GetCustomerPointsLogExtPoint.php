<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerPointsLogQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerPointsLogPaginationDTOOutParam;

interface GetCustomerPointsLogExtPoint {

    public function invoke(ExtCustomerPointsLogQueryDTO $) : ExtCustomerPointsLogPaginationDTOOutParam;

}