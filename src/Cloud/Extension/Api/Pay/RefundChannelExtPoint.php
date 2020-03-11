<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\RefundRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\RefundResponseDTOOutParam;

interface RefundChannelExtPoint {

    public function refund(RefundRequestDTO $) : RefundResponseDTOOutParam;

}