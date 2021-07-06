<?php

namespace Com\Youzan\Cloud\Extension\Api\Cloud;

use Com\Youzan\Cloud\Extension\Param\Cloud\DeliveryToWechatProcessRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Cloud\DeliveryToWechatProcessResponseOutParam;

interface DeliveryToWechatProcessExtPoint {

    public function delivery(DeliveryToWechatProcessRequestDTO $request) : DeliveryToWechatProcessResponseOutParam;

}