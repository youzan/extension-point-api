<?php

namespace Com\Youzan\Cloud\Extension\Api\Salesman;

use Com\Youzan\Cloud\Extension\Param\Distributor\ExtDistributorPlaintextPowerRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Distributor\ExtDistributorPlaintextPowerResponseDTOOutParam;

interface MobileDistributorExpoint {

    public function checkPlaintextPower(ExtDistributorPlaintextPowerRequestDTO $request) : ExtDistributorPlaintextPowerResponseDTOOutParam;

}