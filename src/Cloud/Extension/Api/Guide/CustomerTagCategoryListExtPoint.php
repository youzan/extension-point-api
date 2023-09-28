<?php

namespace Com\Youzan\Cloud\Extension\Api\Guide;

use Com\Youzan\Cloud\Extension\Param\Customer\ExtCustomerTagListRequest;
use Com\Youzan\Cloud\Extension\Param\Customer\ExtCustomerTagResponseOutParam;

interface CustomerTagCategoryListExtPoint {

    public function findPageWithExtPoint(ExtCustomerTagListRequest $request) : ExtCustomerTagResponseOutParam;

}