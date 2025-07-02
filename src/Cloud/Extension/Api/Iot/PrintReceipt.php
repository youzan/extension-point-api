<?php

namespace Com\Youzan\Cloud\Extension\Api\Iot;

use Com\Youzan\Cloud\Extension\Param\Dto\PrintReceiptCoBuildRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\PrintReceiptCoBuildResponseDTOOutParam;

interface PrintReceipt {

    public function printReceipt(PrintReceiptCoBuildRequestDTO $request) : PrintReceiptCoBuildResponseDTOOutParam;

}