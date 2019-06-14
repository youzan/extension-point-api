<?php

namespace Com\Youzan\Cloud\Extension\Api\Sc;

use Com\Youzan\Cloud\Extension\Param\Sc\StockDeductRequestDTO;
use Com\Youzan\Cloud\Extension\Param\StockDeductResponseDTOOutParam;

interface StockDeductExtPoint {

    public function handle(StockDeductRequestDTO $stockDeductRequestDTO) : StockDeductResponseDTOOutParam;

}