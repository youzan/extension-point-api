<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ModifyCustomerRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\ModifyCustomerResponseDTOOutParam;

interface ModifyCustomerExtPoint {

    public function execute(ModifyCustomerRequestDTO $) : ModifyCustomerResponseDTOOutParam;

}