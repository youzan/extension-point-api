<?php

namespace Com\Youzan\Cloud\Extension\Api\Relation;

use Com\Youzan\Cloud\Extension\Param\Customer\ExtCustomerRelationBindRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Customer\ExtCustomerRelationBindResponseDTOOutParam;

interface CustomerRelationExtPoint {

    public function bindCustomerRelation(ExtCustomerRelationBindRequestDTO $request) : ExtCustomerRelationBindResponseDTOOutParam;

}