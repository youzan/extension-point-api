<?php

namespace Com\Youzan\Cloud\Extension\Api\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\PayRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\PayResponseDTOOutParam;

interface PayChannelExtPoint {

    public function pay(PayRequestDTO $) : PayResponseDTOOutParam;

}