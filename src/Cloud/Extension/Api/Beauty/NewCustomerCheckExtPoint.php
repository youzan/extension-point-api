<?php

namespace Com\Youzan\Cloud\Extension\Api\Beauty;

use Com\Youzan\Cloud\Extension\Param\Beauty\NewCustomerCheckRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Beauty\NewCustomerCheckResponseDTOOutParam;

interface NewCustomerCheckExtPoint {

    public function execute(NewCustomerCheckRequestDTO $request) : NewCustomerCheckResponseDTOOutParam;

}