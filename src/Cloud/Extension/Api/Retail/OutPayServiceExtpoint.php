<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\SubmitPayParamDTO;
use Com\Youzan\Cloud\Extension\Param\SubmitPayResultDTOOutParam;
use Com\Youzan\Cloud\Extension\Param\CreateAcquireParamDTO;
use Com\Youzan\Cloud\Extension\Param\CreateAcquireResultDTOOutParam;

interface OutPayServiceExtpoint {

    public function submitPay(SubmitPayParamDTO $paramDTO) : SubmitPayResultDTOOutParam;

    public function createAcquire(CreateAcquireParamDTO $paramDTO) : CreateAcquireResultDTOOutParam;

}