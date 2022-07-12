<?php

namespace Com\Youzan\Cloud\Extension\Api\Point;

use Com\Youzan\Cloud\Extension\Param\Request\CustomerRelationGetByCustomerRequest;
use Com\Youzan\Cloud\Extension\Param\Response\GuideCustomerRelationQueryResponseOutParam;

interface CustomerRelationQueryExtPoint {

    public function getRelation(CustomerRelationGetByCustomerRequest $request) : GuideCustomerRelationQueryResponseOutParam;

}