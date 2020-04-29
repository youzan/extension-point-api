<?php

namespace Com\Youzan\Cloud\Extension\Api\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryCancelDTO;
use Com\Youzan\Cloud\Extension\Param\Delivery\LocalDeliveryCancelResponseDTOOutParam;

interface LocalDeliveryCancelOrderExtPoint {

    public function handle(LocalDeliveryCancelDTO $request) : LocalDeliveryCancelResponseDTOOutParam;

}