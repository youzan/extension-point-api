<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\RefundQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\RefundQueryResponseDTOOutParam;

interface RefundQueryChannelExtPoint {

    public function refundQuery(RefundQueryRequestDTO $request) : RefundQueryResponseDTOOutParam;

}