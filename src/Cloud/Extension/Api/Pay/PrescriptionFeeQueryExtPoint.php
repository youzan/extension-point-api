<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Request\PrescriptionFeeQueryRequest;
use Com\Youzan\Cloud\Extension\Param\Response\PrescriptionFeeQueryResponseOutParam;

interface PrescriptionFeeQueryExtPoint {

    public function query(PrescriptionFeeQueryRequest $request) : PrescriptionFeeQueryResponseOutParam;

}