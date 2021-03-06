<?php

namespace Com\Youzan\Cloud\Extension\Api\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\BenefitExtQueryDTO;
use Com\Youzan\Cloud\Extension\Param\Scrm\BenefitExtInfoDTOOutParam;

interface BenefitPluginExtPoint {

    public function getCoreBenefit(BenefitExtQueryDTO $benefitExtQueryDTO) : BenefitExtInfoDTOOutParam;

}