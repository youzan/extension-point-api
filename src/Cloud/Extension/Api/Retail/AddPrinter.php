<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Dto\AddPrinterCoBuildRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\AddPrinterCoBuildResponseDTOOutParam;

interface AddPrinter {

    public function addPrinter(AddPrinterCoBuildRequestDTO $request) : AddPrinterCoBuildResponseDTOOutParam;

}