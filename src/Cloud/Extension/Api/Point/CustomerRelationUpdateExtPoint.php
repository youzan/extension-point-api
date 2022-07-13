<?php

namespace Com\Youzan\Cloud\Extension\Api\Point;

use Com\Youzan\Cloud\Extension\Param\Request\CustomerRelationUpdateRequest;
use Com\Youzan\Cloud\Extension\Param\Response\GuideCustomerRelationUpdateResponseOutParam;

interface CustomerRelationUpdateExtPoint {

    public function update(CustomerRelationUpdateRequest $request) : GuideCustomerRelationUpdateResponseOutParam;

}