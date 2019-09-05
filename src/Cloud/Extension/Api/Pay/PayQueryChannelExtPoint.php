<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\PayQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\PayQueryResponseDTOOutParam;

interface PayQueryChannelExtPoint {

    public function payQuery(PayQueryRequestDTO $request) : PayQueryResponseDTOOutParam;

}