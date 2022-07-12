<?php

namespace Com\Youzan\Cloud\Extension\Api\Dispatch;

use Com\Youzan\Cloud\Extension\Param\Dispatch\DispatchStaffQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Dispatch\DispatchStaffInfoDTOOutParam;

interface ConsultationDispatchService {

    public function getDispatchStaff(DispatchStaffQueryDTO $queryDTO) : DispatchStaffInfoDTOOutParam;

}