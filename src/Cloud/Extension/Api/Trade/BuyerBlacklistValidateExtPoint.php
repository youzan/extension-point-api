<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\BuyerBlacklistValidateParamDTO;
use Com\Youzan\Cloud\Extension\Param\BuyerBlacklistValidateResultDTOOutParam;

interface BuyerBlacklistValidateExtPoint {

    public function validate(BuyerBlacklistValidateParamDTO $buyerBlacklistValidateParamDTO) : BuyerBlacklistValidateResultDTOOutParam;

}