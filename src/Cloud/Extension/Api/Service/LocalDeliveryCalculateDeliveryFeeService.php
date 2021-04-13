<?php

namespace Com\Youzan\Cloud\Extension\Api\Service;

use Com\Youzan\Cloud\Extension\Param\Dto\LocalCalculateDeliveryFeeDTO;
use Com\Youzan\Cloud\Extension\Param\Response\CalculateDeliveryFeeRespOutParam;

interface LocalDeliveryCalculateDeliveryFeeService {

    public function invoke(LocalCalculateDeliveryFeeDTO $request) : CalculateDeliveryFeeRespOutParam;

}