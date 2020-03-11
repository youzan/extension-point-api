<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerPointsQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerPointsStatusDTOOutParam;

interface GetCustomerPointsExtPoint {

    public function invoke(ExtCustomerPointsQueryDTO $) : ExtCustomerPointsStatusDTOOutParam;

}