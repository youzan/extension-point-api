<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\CustomerExtBillRecordQueryRequest;
use Com\Youzan\Cloud\Extension\Param\Response\CustomerExtBillRecordQueryResponseOutParam;

interface CustomerBillRecordQueryExtPoint {

    public function queryCustomerBillRecord(CustomerExtBillRecordQueryRequest $request) : CustomerExtBillRecordQueryResponseOutParam;

}