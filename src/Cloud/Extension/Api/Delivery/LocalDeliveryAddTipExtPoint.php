<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\AddTipDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\BaseResponseDTOOutParam;

interface LocalDeliveryAddTipExtPoint {

    public function handle(AddTipDTO $request) : BaseResponseDTOOutParam;

}