<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\CreateCustomerRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\CreateCustomerResponseOutParam;

interface CreateCustomerExtPoint {

    public function execute(CreateCustomerRequestDTO $request) : CreateCustomerResponseOutParam;

}