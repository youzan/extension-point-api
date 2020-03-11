<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\FulfillTimeListRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\FullTImeResultDTOOutParam;

interface FulfillTimeExtpoint {

    public function batchQueryFulfillTime(FulfillTimeListRequestDTO $) : FullTImeResultDTOOutParam;

}