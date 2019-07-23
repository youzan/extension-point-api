<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\SubmitPayParamDTO;
use Com\Youzan\Cloud\Extension\Param\SubmitPayResultDTOOutParam;

interface OutPayServiceExtpoint {

    public function submitPay(SubmitPayParamDTO $paramDTO) : SubmitPayResultDTOOutParam;

}