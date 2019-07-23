<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\AvailableVouchersQueryExtpointRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Ump\AvailableVouchersQueryExtPointResponseDTOOutParam;

interface AvailableVouchersQueryExtPoint {

    public function listAvailableVouches(AvailableVouchersQueryExtpointRequestDTO $availableVouchersQueryExtpointRequest) : AvailableVouchersQueryExtPointResponseDTOOutParam;

}