<?php

namespace Com\Youzan\Cloud\Extension\Api\Extpoint;

use Com\Youzan\Cloud\Extension\Param\Dto\StockDeductRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Dto\StockDeductResponseDTOOutParam;

interface StockDeductOpenExtService {

    public function deductCheckExtPoint(StockDeductRequestDTO $request) : StockDeductResponseDTOOutParam;

    public function stockModelExtPoint(StockDeductRequestDTO $requestDTO) : StockDeductResponseDTOOutParam;

}