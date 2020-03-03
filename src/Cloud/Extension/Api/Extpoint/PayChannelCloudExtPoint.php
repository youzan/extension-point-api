<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Pay\PayRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Pay\PayResponseDTOOutParam;

interface PayChannelCloudExtPoint {

    public function pay(PayRequestDTO $request) : PayResponseDTOOutParam;

}