<?php

namespace Com\Youzan\Cloud\Extension\Api\Service;

use Com\Youzan\Cloud\Extension\Param\Dto\LocalDeliveryCheckDTO;
use Com\Youzan\Cloud\Extension\Param\Response\LocalDeliveryCheckRespOutParam;

interface LocalDeliveryCheckService {

    public function invoke(LocalDeliveryCheckDTO $localDeliveryCheckDTO) : LocalDeliveryCheckRespOutParam;

}