<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\RefundPayParamDTO;
use Com\Youzan\Cloud\Extension\Param\FansUnionidCreateDTOOutParam;

interface RefundableAmountCalcExtPoin {

    public function invoke(RefundPayParamDTO $eeeee) : FansUnionidCreateDTOOutParam;

}