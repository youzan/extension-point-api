<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\ShipOrderSelfValidateParamDTO;
use Com\Youzan\Cloud\Extension\Param\ShipOrderSelfValidateResultDTOOutParam;

interface ShipOrderSelfValidateExtPoint {

    public function validate(ShipOrderSelfValidateParamDTO $shipOrderSelfValidateParamDTO) : ShipOrderSelfValidateResultDTOOutParam;

}