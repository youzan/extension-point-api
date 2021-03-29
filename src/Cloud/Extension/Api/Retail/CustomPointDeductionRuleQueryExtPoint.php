<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\Request\CustomPointDeductionRuleQueryRequestDTO;
use Com\Youzan\Cloud\Extension\Param\Response\CustomPointDeductionRuleQueryResponseDTOOutParam;

interface CustomPointDeductionRuleQueryExtPoint {

    public function queryCustomPointDeductRule(CustomPointDeductionRuleQueryRequestDTO $request) : CustomPointDeductionRuleQueryResponseDTOOutParam;

}