<?php

namespace Com\Youzan\Cloud\Extension\Api\Iot;

use Com\Youzan\Cloud\Extension\Param\Dto\DelPrintQueueCoBuildRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\DelPrintQueueCoBuildResponseDTOOutParam;

interface DelPrintQueue {

    public function delPrintQueue(DelPrintQueueCoBuildRequestDTO $request) : DelPrintQueueCoBuildResponseDTOOutParam;

}