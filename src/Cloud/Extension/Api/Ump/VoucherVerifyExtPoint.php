<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Ump\VoucherVerifyExtpointRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Ump\VoucherVerifyExtPointResponseDTOOutParam;

interface VoucherVerifyExtPoint {

    public function verify(VoucherVerifyExtpointRequestDTO $voucherVerifyExtpointRequest) : VoucherVerifyExtPointResponseDTOOutParam;

}