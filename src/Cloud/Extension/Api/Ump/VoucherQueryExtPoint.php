<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\VoucherQueryExtPointRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Ump\VoucherQueryExtPointResponseDTOOutParam;

interface VoucherQueryExtPoint {

    public function query(VoucherQueryExtPointRequestDTO $voucherQueryExtPointRequest) : VoucherQueryExtPointResponseDTOOutParam;

}