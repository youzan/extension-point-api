<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Customer\ExtCustomerTagRequest;
use Com\Youzan\Cloud\Extension\Param\Customer\ExtCustomerTagDetailResponseOutParam;

interface CustomerTagDetailGetExtPoint {

    public function getCustomerTagDetailWithExtPoint(ExtCustomerTagRequest $request) : ExtCustomerTagDetailResponseOutParam;

}