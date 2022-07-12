<?php

namespace Com\Youzan\Cloud\Extension\Api\Medicine;

use Com\Youzan\Cloud\Extension\Param\Medicine\PrescriptionInfoQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Medicine\PrescriptionInfoQueryResponseDTOOutParam;

interface PrescriptionInfoQueryExtPoint {

    public function queryPrescriptionInfo(PrescriptionInfoQueryRequestDTO $request) : PrescriptionInfoQueryResponseDTOOutParam;

}