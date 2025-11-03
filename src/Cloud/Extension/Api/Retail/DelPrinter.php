<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Dto\DelPrinterCoBuildRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\DelPrinterCoBuildResponseDTOOutParam;

interface DelPrinter {

    public function delPrinter(DelPrinterCoBuildRequestDTO $request) : DelPrinterCoBuildResponseDTOOutParam;

}