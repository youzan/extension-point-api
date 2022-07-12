<?php

namespace Com\Youzan\Cloud\Extension\Api\Api;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCalculateTariffRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Response\ExtCalculateTariffResponseDTOOutParam;

interface OrderPriceCalculateExtPoint {

    public function calculateTariff(ExtCalculateTariffRequestDTO $extCalculateTariffRequestDTO) : ExtCalculateTariffResponseDTOOutParam;

}